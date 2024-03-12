<?php

namespace Hup234design\Cms\Helpers;

use Hup234design\Cms\Models\Page;

class NavigationMenuItems
{
    public static function make($items = [])
    {
        return self::transformItems($items);
    }

    private static function transformItems($items) {

        ray($items);

        $transformedItems = [];

        foreach ($items as $item) {
            $href = null;
            $target = '_self';
            $dropdown = false;

            switch($item['type']) {
                case 'dropdown':
                    $dropdown = true;
                    break;

                case 'home-page':
                    $href = route('pages.home');
                    break;

                case 'index-page':
                    if( $item['data']['route'] ?? false ) {
                        $href = route($item['data']['route']);
                    }
                    break;

                case 'page':
                    if ($page = Page::find($item['data']['id'])) {
                        $href = route('pages.page', $page->slug);
                    }
                    break;

                case 'external-link':
                    $href   = $item['data']['url'];
                    $target = $item['data']['target'] ?? '_self';
                    break;
            }

            // If the model (Page, Post or External Link) was processed and the route was generated
            if ($dropdown || $href) {
                $transformed = [
                    'label'    => $item['label'],
                    'href'     => $href,
                    'target'   => $target,
                    'dropdown' => $dropdown,
                    'children' => null,
                ];

                // If there are children, transform them recursively
                if (!empty($item['children'])) {
                    $transformed['dropdown'] = true;
                    $transformed['children'] = self::transformItems($item['children']);
                }

                $transformedItems[] = $transformed;
            }
        }

        return $transformedItems;
    }

}
