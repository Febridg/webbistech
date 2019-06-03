@extends('admintmp')

@section('main')
<div class="inner" style="min-height:700px;">
    <div class="row">
        <div class="col-lg-12">
            <h2> Dahsboard </h2>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Stacking Chart
                </div>

                <div class="panel-body">

                    <div class="demo-container">
                        <div id="placeholderStack" class="demo-placeholder"></div>
                    </div>
                    <p class="stackControls">
                        <button class="btn btn-primary">With stacking</button>
                        <button class="btn btn-primary">Without stacking</button>
                    </p>

                    <p class="graphControls">
                        <button class="btn btn-primary">Bars</button>
                        <button class="btn btn-primary">Lines</button>
                        <button class="btn btn-primary">Lines with steps</button>
                    </p>
                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categories Chart
                </div>

                <div class="panel-body">

                    <div class="demo-container">
                        <div id="placeholder" class="demo-placeholder"></div>
                    </div>
                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Error Bars Chart
                </div>

                <div class="panel-body">

                    <div class="demo-container">
                        <div id="placeholderEB" class="demo-placeholder"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</div>
@stop