<style>
    .bg-custom-primary{
        background-color: {{$active_theme->primary_color}} !important;
    }
    .bg-custom-secondary{
        background-color: {{$active_theme->secondary_color}} !important;
    }
    .text-primary{
        color: {{$active_theme->primary_color}} !important;
    }
    .text-secondary{
        color: {{$active_theme->secondary_color}} !important;
    }
    .btn-primary{
        background-color: {{$active_theme->primary_color}} !important;
        border-color: {{$active_theme->primary_color}} !important;
    }
    .btn-primary:hover{

    }
    .btn-outline-primary{
        color: {{$active_theme->primary_color}} !important;
        border-color: {{$active_theme->primary_color}} !important;
    }
    .btn-outline-primary:hover{
        background-color: {{$active_theme->primary_color}} !important;
        color: {{$active_theme->secondary_color}} !important;
    }
    .btn-secondary{
        background-color: {{$active_theme->secondary_color}} !important;
        border-color: {{$active_theme->secondary_color}} !important;
    }
    .btn-secondary:hover{

    }
    .btn-outline-secondary{
        color: {{$active_theme->secondary_color}} !important;
        border-color: {{$active_theme->secondary_color}} !important;
    }
    .btn-outline-secondary:hover{
        background-color: {{$active_theme->secondary_color}} !important;
        color: {{$active_theme->primary_color}} !important;
    }
    .btn-outline-combo{
        color: {{$active_theme->secondary_color}} !important;
        border-color: {{$active_theme->secondary_color}} !important;
    }
    .btn-outline-combo:hover{
        background-color: {{$active_theme->primary_color}} !important;
        color: {{$active_theme->secondary_color}} !important;
    }

</style>
