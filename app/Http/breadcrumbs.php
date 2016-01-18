<?php

Breadcrumbs::register('s4w', function ($breadcrumbs) {
	$breadcrumbs->push('', url('http://steel4web.com.br/new_s4w/saas/admin'), ['icon' => 'fa-home']);
});

Breadcrumbs::register('gestor-de-lotes', function ($breadcrumbs) {
	$breadcrumbs->parent('s4w');
	$breadcrumbs->push('Gestor de Lotes', url('/lotes'));
});

Breadcrumbs::register('lotes', function ($breadcrumbs) {
	$breadcrumbs->parent('gestor-de-lotes');
	$breadcrumbs->push('Conjuntos', url('/lotes'));
});
Breadcrumbs::register('pecas', function ($breadcrumbs) {
	$breadcrumbs->parent('gestor-de-lotes');
	$breadcrumbs->push('Peças', url('/lotes/pecas'));
});