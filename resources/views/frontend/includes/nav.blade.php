<nav class="navbar navbar-expand-lg navbar-light mb-4">
    <div class="container-fluid">
        <a href="{{ route('frontend.index') }}" class="navbar-brand">{{appName()}}</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('Toggle navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <x-utils.link
                            :text="__(getLocaleName(app()->getLocale()))"
                            class="nav-link dropdown-toggle"
                            id="navbarDropdownLanguageLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false" />

                        @include('includes.partials.lang')
                    </li>
                @endif
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.index')"
                            :active="activeClass(Active::checkRoute(['frontend.index']))"
                            :text="__('Home')"
                            class="nav-link font-lg" />
                    </li>
                    @if($active_theme->projects_active)
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.projects')"
                            :active="activeClass(Active::checkRoute(['frontend.projects', 'frontend.projects.show']))"
                            :text="__('Works')"
                            class="nav-link" />
                    </li>
                    @endif
                    @if(isset($active_theme) && $active_theme->resume_active && $active_theme->resume() != null)
                        <li class="nav-item">
                            <x-utils.link
                                :href="$active_theme->resume()->getUrl()"
                                :text="__('CV')"
                                class="nav-link"
                                target="_blank" />
                        </li>
                    @endif
                    @if($active_theme->blogs_active)
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.blogs')"
                            :active="activeClass(Active::checkRoute(['frontend.blogs', 'frontend.blogs.show']))"
                            :text="__('Blogs')"
                            class="nav-link" />
                    </li>
                    @endif
                    @if($active_theme->about_active)
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.about')"
                            :active="activeClass(Active::checkRoute('frontend.about'))"
                            :text="__('About')"
                            class="nav-link" />
                    </li>
                    @endif
                    @if($active_theme->positions_active)
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.career')"
                            :active="activeClass(Active::checkRoute('frontend.career'))"
                            :text="__('Career')"
                            class="nav-link" />
                    </li>
                    @endif
                    @if($active_theme->projects_active)
                    <li class="nav-item">
                        <x-utils.link
                            :href="route('frontend.contact')"
                            :active="activeClass(Active::checkRoute('frontend.contact'))"
                            :text="__('Contact')"
                            class="nav-link" />
                    </li>
                    @endif
                    @if(isset($active_theme->instagram_url))
                        <li class="nav-item align-self-center">
                            <a href="{{$active_theme->instagram_url}}" target="_blank" class="text-decoration-none">
                                <i class="fab fa-instagram nav-link fa-lg" role="button"></i>
                            </a>
                        </li>
                    @endif
                    @if(isset($active_theme->facebook_url))
                        <li class="nav-item align-self-center">
                            <a href="{{$active_theme->facebook_url}}" target="_blank" class="text-decoration-none">
                                <i class="fab fa-facebook nav-link fa-lg" role="button"></i>
                            </a>
                        </li>
                    @endif
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>

@if (config('boilerplate.frontend_breadcrumbs'))
    @include('frontend.includes.partials.breadcrumbs')
@endif
