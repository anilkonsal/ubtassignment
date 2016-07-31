@extends('layouts.app')

@section('content')
<div ng-controller="ubtCtrl">
    <div class="container" ng-style="{'background-image': 'url('+ bgPhoto+')'}" id="background">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default" id="panel">
                    

                    <div class="panel-body">
                        <form class="form-search" >
                            <div class="col-md-3">
                                

                                <label>Make</label>
                                <br><br>
                                <input type="text" ng-model="selectedMake" placeholder="Search Makes" typeahead="c as c.name for c in makes | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html" class="form-control" style="width:200px;">
                                <i class="icon-search nav-search-icon"></i>
                                <script type="text/ng-template" id="customTemplate.html">
                                    <a>
                                    <span bind-html-unsafe="match.label | typeaheadHighlight:query"></span>
                                    <i>(@{{match.model.name}})</i>
                                    </a>
                                </script>

                            </div>
                            <div class="col-md-3">
                                <label>Model</label>

                                <br><br>
                                <input type="text" ng-model="selectedModel" placeholder="Search Model" typeahead="c as c.name for c in models | filter:$viewValue | limitTo:10" typeahead-min-length='1' typeahead-on-select='onSelectPart($item, $model, $label)' typeahead-template-url="customTemplate.html" class="form-control" style="width:200px;">
                                <i class="icon-search nav-search-icon"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
