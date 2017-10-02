@extends('admin.layout.dashboard')
@section('title','Panel de Administración')
@section('content')
    <?php
    $total_articles = $articles->count();
    $total_categories = $categories->count();
    $total_tags = $tags->count();
    $lastArticle = $articles->last();
    $articleDate = $lastArticle->created_at->format("d-m-Y");

    $projectWithAttachments = ($projects->filter(function ($value) {
        if ($value->attachments->count() > 0) {
            return $value;
        }
    }
    )->count());

    $totalProjects = $projects->count();
    ?>

    @include('admin.dashboard.dashboard_content')
    @include('admin.dashboard.contact')
    @include('admin.dashboard.projects')
@endsection