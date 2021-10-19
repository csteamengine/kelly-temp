<?php
/**
 * Created by PhpStorm.
 * User: gs57722
 * Date: 3/15/19
 * Time: 10:52 AM
 */
?>
<div class="row">
    <div class="col-10 m-auto">
        <div id="projectImageCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                @foreach($images as $image)
                    @if($image->getTypeFromMime() != 'pdf')
                        <div class="carousel-item @if($loop->first) active @endif h-100 m-auto" style="background-color: {{'#'.$image->getCustomProperty('color')}}; background-size: 100% !important" data-image="{{$image->getUrl('preview')}}">
                        </div>
                    @else
                        <div class="carousel-item @if($loop->first) active @endif h-100 m-auto" style="background-color: {{'#'.$image->getCustomProperty('color')}}; background-size: 100% !important" data-image="{{$image->getUrl('preview')}}" hidden>
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#projectImageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#projectImageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
