<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/arrilot/load-widget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IRyOBzvMT9TCISc9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-blog.blog.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-signature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NhZ4ciRyPns4o3oL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/AgreementForm-Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5rdkZQkWrw4qQMY5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.postlogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/hooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks.install',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/article/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-blocks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog_posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inputs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.update_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form/action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.action',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.media.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreement-form/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/new_folder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.new_folder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/delete_file_folder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/move_file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.move',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/rename_file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.rename',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/crop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.media.crop',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/database/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/compass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.compass.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.compass.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/voyager-assets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.voyager_assets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5GLZfjPAaYdd2Hca',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zaJSaa7dXtm70WAv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.account.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/blog/([^/]++)(*:21)|/admin/(?|enquiries/([^/]++)(?|/(?|file/([^/]++)(*:76)|restore(*:90)|edit(*:101))|(*:110))|hooks/([^/]++)(?|/(?|enable(*:146)|disable(*:161)|update(*:175))|(*:184))|users/(?|([^/]++)(?|/(?|restore(*:224)|edit(*:236))|(*:245))|impersonate/([^/]++)(?|(*:277)|(*:285)))|menus/([^/]++)(?|/(?|restore(*:323)|edit(*:335)|builder(*:350)|order(*:363)|item(?|/([^/]++)(*:387)|(*:395)))|(*:405))|roles/([^/]++)(?|/(?|restore(*:442)|edit(*:454))|(*:463))|a(?|rticle/([^/]++)(?|/(?|restore(*:505)|edit(*:517))|(*:526))|greement\\-form/([^/]++)(?|/(?|restore(*:572)|edit(*:584))|(*:593)))|page(?|\\-blocks/(?|([^/]++)(?|/(?|restore(*:644)|edit(*:656))|(*:665))|sort(*:678)|minimize(*:694))|s/(?|([^/]++)(?|/(?|restore(*:730)|edit(*:742))|(*:751))|layout(?:/([^/]++))?(*:780)))|b(?|log_posts/([^/]++)(?|/(?|restore(*:826)|edit(*:838))|(*:847))|read/(?|([^/]++)(?|/(?|create(*:885)|edit(*:897))|(*:906))|relationship(*:927)|delete_relationship/([^/]++)(*:963)))|categories/([^/]++)(?|/(?|restore(*:1006)|edit(*:1019))|(*:1029))|forms/([^/]++)(?|/(?|restore(*:1067)|edit(*:1080))|(*:1090))|inputs/([^/]++)(?|/(?|restore(*:1129)|edit(*:1142))|(*:1152))|settings/([^/]++)(?|(*:1182)|/(?|move_(?|up(*:1205)|down(*:1218))|delete_value(*:1240)))|database/([^/]++)(?|(*:1271)|/edit(*:1285)|(*:1294)))|/voyager\\-forms\\-submit\\-enquiry/([^/]++)(*:1346)|/password/reset/([^/]++)(*:1379)|/(.+)?(*:1394)|/api/user(*:1412))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-blog.blog.post',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.file',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'fileKey',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks.enable',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks.disable',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks.update',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.hooks.uninstall',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.users.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.account.impersonate.admin',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.account.impersonate',
          ),
          1 => 
          array (
            0 => 'originalId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.builder',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.order_item',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.add',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.item.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.menus.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.roles.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.article.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.agreement-form.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.sort',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.page-blocks.minimize',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.pages.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager-frontend.pages.layout',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.blog_posts.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.create',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.edit',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.relationship',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.bread.delete_relationship',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.categories.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.forms.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.inputs.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.move_up',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.move_down',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.settings.delete_value',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.show',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.edit',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.update',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.database.destroy',
          ),
          1 => 
          array (
            0 => 'database',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'voyager.enquiries.submit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVB9glAfFl90xLGJ',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SPYRVfASsIWNZiJP',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::IRyOBzvMT9TCISc9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'arrilot/load-widget',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Arrilot\\Widgets\\Controllers\\WidgetController@showWidget',
        'controller' => 'Arrilot\\Widgets\\Controllers\\WidgetController@showWidget',
        'namespace' => 'Arrilot\\Widgets\\Controllers',
        'prefix' => 'arrilot',
        'where' => 
        array (
        ),
        'as' => 'generated::IRyOBzvMT9TCISc9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-blog.blog.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController@getPosts',
        'as' => 'voyager-blog.blog.list',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController@getPosts',
        'namespace' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers',
        'prefix' => 'blog',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-blog.blog.post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController@getPost',
        'as' => 'voyager-blog.blog.post',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController@getPost',
        'namespace' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers',
        'prefix' => 'blog',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forms/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@sort',
        'as' => 'voyager.forms.sort',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@sort',
        'namespace' => '\\Pvtl\\VoyagerForms\\Http\\Controllers',
        'prefix' => 'admin/forms/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/{id}/file/{fileKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@getFile',
        'as' => 'voyager.enquiries.file',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@getFile',
        'namespace' => '\\Pvtl\\VoyagerForms\\Http\\Controllers',
        'prefix' => 'admin/enquiries/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'voyager-forms-submit-enquiry/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@submit',
        'as' => 'voyager.enquiries.submit',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@submit',
        'namespace' => '\\Pvtl\\VoyagerForms\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NhZ4ciRyPns4o3oL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-signature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AgreementFormController@get_signature',
        'controller' => 'App\\Http\\Controllers\\AgreementFormController@get_signature',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NhZ4ciRyPns4o3oL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5rdkZQkWrw4qQMY5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'AgreementForm-Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AgreementFormController@store',
        'controller' => 'App\\Http\\Controllers\\AgreementFormController@store',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5rdkZQkWrw4qQMY5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@login',
        'as' => 'voyager.login',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.postlogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@postLogin',
        'as' => 'voyager.postlogin',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerAuthController@postLogin',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/hooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@index',
        'as' => 'voyager.hooks',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks.enable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/hooks/{name}/enable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@enable',
        'as' => 'voyager.hooks.enable',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@enable',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks.disable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/hooks/{name}/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@disable',
        'as' => 'voyager.hooks.disable',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@disable',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/hooks/{name}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@update',
        'as' => 'voyager.hooks.update',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks.install' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/hooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@install',
        'as' => 'voyager.hooks.install',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@install',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.hooks.uninstall' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/hooks/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@uninstall',
        'as' => 'voyager.hooks.uninstall',
        'controller' => '\\Larapack\\VoyagerHooks\\Controllers\\HooksController@uninstall',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@index',
        'as' => 'voyager.dashboard',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@logout',
        'as' => 'voyager.logout',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@logout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@upload',
        'as' => 'voyager.upload',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@upload',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@profile',
        'as' => 'voyager.profile',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@profile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@order',
        'as' => 'voyager.users.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@action',
        'as' => 'voyager.users.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update_order',
        'as' => 'voyager.users.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@restore',
        'as' => 'voyager.users.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@relation',
        'as' => 'voyager.users.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@remove_media',
        'as' => 'voyager.users.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.users.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerUserController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.menus.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.menus.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.menus.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.menus.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.menus.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.menus.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.menus.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@order',
        'as' => 'voyager.roles.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@action',
        'as' => 'voyager.roles.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update_order',
        'as' => 'voyager.roles.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@restore',
        'as' => 'voyager.roles.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@relation',
        'as' => 'voyager.roles.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@remove_media',
        'as' => 'voyager.roles.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.roles.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@order',
        'controller' => '\\ArticleController@order',
        'as' => 'voyager.article.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@action',
        'controller' => '\\ArticleController@action',
        'as' => 'voyager.article.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@update_order',
        'controller' => '\\ArticleController@update_order',
        'as' => 'voyager.article.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@restore',
        'controller' => '\\ArticleController@restore',
        'as' => 'voyager.article.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@relation',
        'controller' => '\\ArticleController@relation',
        'as' => 'voyager.article.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\ArticleController@remove_media',
        'controller' => '\\ArticleController@remove_media',
        'as' => 'voyager.article.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.index',
        'uses' => '\\ArticleController@index',
        'controller' => '\\ArticleController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.create',
        'uses' => '\\ArticleController@create',
        'controller' => '\\ArticleController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.store',
        'uses' => '\\ArticleController@store',
        'controller' => '\\ArticleController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.show',
        'uses' => '\\ArticleController@show',
        'controller' => '\\ArticleController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/article/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.edit',
        'uses' => '\\ArticleController@edit',
        'controller' => '\\ArticleController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.update',
        'uses' => '\\ArticleController@update',
        'controller' => '\\ArticleController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.article.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/article/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.article.destroy',
        'uses' => '\\ArticleController@destroy',
        'controller' => '\\ArticleController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@order',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@order',
        'as' => 'voyager.page-blocks.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@action',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@action',
        'as' => 'voyager.page-blocks.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@update_order',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@update_order',
        'as' => 'voyager.page-blocks.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@restore',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@restore',
        'as' => 'voyager.page-blocks.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@relation',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@relation',
        'as' => 'voyager.page-blocks.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@remove_media',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@remove_media',
        'as' => 'voyager.page-blocks.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.index',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@index',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.create',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@create',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.store',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@store',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.show',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@show',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-blocks/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.edit',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@edit',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/page-blocks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.update',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@update',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/page-blocks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.page-blocks.destroy',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@destroy',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@order',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@order',
        'as' => 'voyager.pages.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@action',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@action',
        'as' => 'voyager.pages.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@update_order',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@update_order',
        'as' => 'voyager.pages.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@restore',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@restore',
        'as' => 'voyager.pages.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@relation',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@relation',
        'as' => 'voyager.pages.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@remove_media',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@remove_media',
        'as' => 'voyager.pages.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.index',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@index',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.create',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@create',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.store',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@store',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.show',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@show',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.edit',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@edit',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.update',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@update',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/pages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.pages.destroy',
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@destroy',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@order',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@order',
        'as' => 'voyager.blog_posts.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_posts/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@action',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@action',
        'as' => 'voyager.blog_posts.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_posts/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@update_order',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@update_order',
        'as' => 'voyager.blog_posts.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@restore',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@restore',
        'as' => 'voyager.blog_posts.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@relation',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@relation',
        'as' => 'voyager.blog_posts.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_posts/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@remove_media',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@remove_media',
        'as' => 'voyager.blog_posts.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.index',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@index',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.create',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@create',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog_posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.store',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@store',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.show',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@show',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog_posts/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.edit',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@edit',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/blog_posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.update',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@update',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.blog_posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog_posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.blog_posts.destroy',
        'uses' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@destroy',
        'controller' => '\\Pvtl\\VoyagerBlog\\Http\\Controllers\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.categories.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.categories.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.categories.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.categories.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.categories.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.categories.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/categories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.categories.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@order',
        'as' => 'voyager.forms.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forms/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@action',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@action',
        'as' => 'voyager.forms.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forms/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@update_order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@update_order',
        'as' => 'voyager.forms.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@restore',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@restore',
        'as' => 'voyager.forms.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@relation',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@relation',
        'as' => 'voyager.forms.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forms/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@remove_media',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@remove_media',
        'as' => 'voyager.forms.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.index',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@index',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.create',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@create',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.store',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@store',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.show',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@show',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forms/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.edit',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@edit',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/forms/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.update',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@update',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.forms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/forms/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.forms.destroy',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@destroy',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\FormController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@order',
        'as' => 'voyager.inputs.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inputs/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@action',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@action',
        'as' => 'voyager.inputs.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inputs/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@update_order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@update_order',
        'as' => 'voyager.inputs.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@restore',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@restore',
        'as' => 'voyager.inputs.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@relation',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@relation',
        'as' => 'voyager.inputs.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inputs/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@remove_media',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@remove_media',
        'as' => 'voyager.inputs.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.index',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@index',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.create',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@create',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/inputs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.store',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@store',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.show',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@show',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inputs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.edit',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@edit',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/inputs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.update',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@update',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.inputs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/inputs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.inputs.destroy',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@destroy',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\InputController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@order',
        'as' => 'voyager.enquiries.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/enquiries/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@action',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@action',
        'as' => 'voyager.enquiries.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/enquiries/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@update_order',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@update_order',
        'as' => 'voyager.enquiries.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@restore',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@restore',
        'as' => 'voyager.enquiries.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@relation',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@relation',
        'as' => 'voyager.enquiries.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/enquiries/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@remove_media',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@remove_media',
        'as' => 'voyager.enquiries.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.index',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@index',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.create',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@create',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/enquiries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.store',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@store',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.show',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@show',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiries/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.edit',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@edit',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/enquiries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.update',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@update',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.enquiries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/enquiries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.enquiries.destroy',
        'uses' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@destroy',
        'controller' => '\\Pvtl\\VoyagerForms\\Http\\Controllers\\EnquiryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@order',
        'as' => 'voyager.agreement-form.order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.action' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agreement-form/action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@action',
        'as' => 'voyager.agreement-form.action',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.update_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agreement-form/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update_order',
        'as' => 'voyager.agreement-form.update_order',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/{id}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@restore',
        'as' => 'voyager.agreement-form.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.relation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@relation',
        'as' => 'voyager.agreement-form.relation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.media.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agreement-form/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@remove_media',
        'as' => 'voyager.agreement-form.media.remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agreement-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreement-form/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/agreement-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.agreement-form.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/agreement-form/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.agreement-form.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{menu}/builder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@builder',
        'as' => 'voyager.menus.builder',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@builder',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.order_item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{menu}/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@order_item',
        'as' => 'voyager.menus.order_item',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@order_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.item.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{menu}/item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@delete_menu',
        'as' => 'voyager.menus.item.destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@delete_menu',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.item.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{menu}/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@add_item',
        'as' => 'voyager.menus.item.add',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@add_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.menus.item.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/menus/{menu}/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@update_item',
        'as' => 'voyager.menus.item.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMenuController@update_item',
        'namespace' => NULL,
        'prefix' => 'admin/menus/{menu}/item',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@index',
        'as' => 'voyager.settings.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@store',
        'as' => 'voyager.settings.store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@update',
        'as' => 'voyager.settings.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete',
        'as' => 'voyager.settings.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.move_up' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/{id}/move_up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_up',
        'as' => 'voyager.settings.move_up',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_up',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.move_down' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/{id}/move_down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_down',
        'as' => 'voyager.settings.move_down',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@move_down',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.settings.delete_value' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/{id}/delete_value',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete_value',
        'as' => 'voyager.settings.delete_value',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerSettingsController@delete_value',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@index',
        'as' => 'voyager.media.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@index',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@files',
        'as' => 'voyager.media.files',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@files',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.new_folder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/new_folder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@new_folder',
        'as' => 'voyager.media.new_folder',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@new_folder',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/delete_file_folder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@delete',
        'as' => 'voyager.media.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@delete',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.move' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/move_file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@move',
        'as' => 'voyager.media.move',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@move',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.rename' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/rename_file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@rename',
        'as' => 'voyager.media.rename',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@rename',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@upload',
        'as' => 'voyager.media.upload',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@upload',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.media.crop' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/crop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@crop',
        'as' => 'voyager.media.crop',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerMediaController@crop',
        'namespace' => NULL,
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@index',
        'as' => 'voyager.bread.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@index',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/{table}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@create',
        'as' => 'voyager.bread.create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@create',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@store',
        'as' => 'voyager.bread.store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@store',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/{table}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@edit',
        'as' => 'voyager.bread.edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/bread/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@update',
        'as' => 'voyager.bread.update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@update',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/bread/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@destroy',
        'as' => 'voyager.bread.delete',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.relationship' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bread/relationship',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@addRelationship',
        'as' => 'voyager.bread.relationship',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@addRelationship',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.bread.delete_relationship' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bread/delete_relationship/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@deleteRelationship',
        'as' => 'voyager.bread.delete_relationship',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBreadController@deleteRelationship',
        'namespace' => NULL,
        'prefix' => 'admin/bread',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.index',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.create',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@create',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.store',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@store',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.show',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@show',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/database/{database}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.edit',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@edit',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.update',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@update',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.database.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/database/{database}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'as' => 'voyager.database.destroy',
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@destroy',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerDatabaseController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.compass.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/compass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'as' => 'voyager.compass.index',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'namespace' => NULL,
        'prefix' => 'admin/compass',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.compass.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/compass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'as' => 'voyager.compass.post',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerCompassController@index',
        'namespace' => NULL,
        'prefix' => 'admin/compass',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.voyager_assets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/voyager-assets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@assets',
        'as' => 'voyager.voyager_assets',
        'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerController@assets',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5GLZfjPAaYdd2Hca' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5GLZfjPAaYdd2Hca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zaJSaa7dXtm70WAv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::zaJSaa7dXtm70WAv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers\\App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@index',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@index',
        'as' => 'voyager-frontend.account',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@updateAccount',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@updateAccount',
        'as' => 'voyager-frontend.account.update',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.account.impersonate.admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/impersonate/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'web',
          3 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@impersonateUser',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@impersonateUser',
        'as' => 'voyager-frontend.account.impersonate.admin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.account.impersonate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/impersonate/{originalId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'web',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@impersonateUser',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\AccountController@impersonateUser',
        'as' => 'voyager-frontend.account.impersonate',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.pages.layout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/layout/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PageController@changeLayout',
        'as' => 'voyager-frontend.pages.layout',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PageController@changeLayout',
        'namespace' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers',
        'prefix' => 'admin/pages/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager-frontend.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'uses' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\SearchController@index',
        'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\SearchController@index',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'voyager-frontend.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@sort',
        'as' => 'voyager.page-blocks.sort',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@sort',
        'namespace' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers',
        'prefix' => 'admin/page-blocks/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'voyager.page-blocks.minimize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-blocks/minimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin.user',
        ),
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@minimize',
        'as' => 'voyager.page-blocks.minimize',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController@minimize',
        'namespace' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers',
        'prefix' => 'admin/page-blocks/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YVB9glAfFl90xLGJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug?}',
      'action' => 
      array (
        'uses' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@getPage',
        'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController@getPage',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::YVB9glAfFl90xLGJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'slug' => '.+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SPYRVfASsIWNZiJP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@6C2U2ofp2Ln30MchFHpIFz2X1WmfrpF9hkLxhcvnCTE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004bc87bf10000000050d058cc";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SPYRVfASsIWNZiJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
