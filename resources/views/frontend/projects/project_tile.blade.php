<?php
/**
 * Created by PhpStorm.
 * User: gregorysteenhagen
 * Date: 2019-03-16
 * Time: 08:58
 */

?>

@if($project->getMedia('images')->first() != null)
    <div class="project-tile col-6 col-md-4 text-center">
        <div class="content project-tile-content">
            <div class="project-bg" style="background-color: {{'#'.$project->getMedia('images')->first()->getCustomProperty('color')}}" data-image="{{$project->getMedia('images')->first()->getUrl()}}"></div>
            {{--        @if($project->is_pdf)--}}
            {{--            <a href="{{$project->images[0]->image_url}}" target="_blank">--}}
            {{--                <div class="project-tile-overlay">--}}
            {{--                    <span class="project-tile-title">{{$project->title}}</span>--}}
            {{--                </div>--}}
            {{--            </a>--}}
            {{--        @else--}}
            <a href="{{route('frontend.projects.show', $project)}}">
                <div class="project-tile-overlay">
                    <span class="project-tile-title">{{$project->title}}</span>
                </div>
            </a>
            {{--        @endif--}}
        </div>
    </div>
@endif
