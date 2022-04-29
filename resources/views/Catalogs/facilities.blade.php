@extends('Components.layout')

@section('head')
    <script src="/js/catalogs.js"></script>
@endsection

@section('body')
    onload="init()"
@endsection

@section('content')
    <div class="hero mt-5">
        <p id="catalogTitle" class="title has-text-centered">Facilities</p>
    </div>
    <div class="container mt-4">
        <div class="columns">
            <!-- Left side -->
            <div class="column is-one-quarter">
                @include('Catalogs.Components.CatalogDropdown')
                <div class="pt-6">
                    <div class="label">Categories</div>
                    <aside class="menu">
                        <ul id="categoryMenu" class="menu-list">
                            <li><a onclick="handleClick(this)" href="#" class="is-active">Main service</a></li>
                            <li><a onclick="handleClick(this)" href="#">Requests</a></li>
                            <li><a onclick="handleClick(this)" href="#">Issues</a></li>
                            <li><a onclick="handleClick(this)" href="#">Feedback</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        <!-- Right Side -->
            <div id="content" class="column">
                <div id="titleCategory" class="title"></div>
                <template id="template">
                    <div id="card">
                        <div class="card mt-3">
                            <div class="card-header" onclick="collapsibleElement(this.offsetParent.children[1])">
                                <p id="service" class="card-header-title">No Title</p>
                                <a data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                                    <span class="icon">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div id="collapsible-card" class="is-collapsible" style="display: none">
                                <div class="card-content">
                                    <p id="description" class="content is-5">No Body</p>
                                    <p class="subtitle is-6">
                                    </p>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                        <a href="/catalog/create">Go to form...</a>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Furniture
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Order furniture for your workplace
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Handyman
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Order handyman service
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
{{--                @foreach(item)--}}
{{--                show box for every entry--}}
{{--                @endforeach--}}
            </div>
        </div>
    </div>
@endsection
