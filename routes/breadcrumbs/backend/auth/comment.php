<?php

Breadcrumbs::for('admin.auth.comment.index', function ($trail) {
    $trail->push(__('menus.backend.access.comments.management'), route('admin.auth.comment.index'));
});

Breadcrumbs::for('admin.auth.comment.create', function ($trail) {
    $trail->parent('admin.auth.comment.index');
    $trail->push(__('menus.backend.access.comments.create'), route('admin.auth.comment.create'));
});

Breadcrumbs::for('admin.auth.comment.edit', function ($trail, $id) {
    $trail->parent('admin.auth.comment.index');
    $trail->push(__('menus.backend.access.comments.edit'), route('admin.auth.comment.edit', $id));
});
Breadcrumbs::for('admin.auth.comment.show', function ($trail, $id) {
    $trail->parent('admin.auth.comment.index');
    $trail->push(__('menus.backend.access.comments.show'), route('admin.auth.comment.show', $id));
});
Breadcrumbs::for('admin.auth.comment.forward', function ($trail, $id) {
    $trail->parent('admin.auth.comment.index');
    $trail->push(__('menus.backend.access.comments.forward'), route('admin.auth.comment.forward', $id));
});
