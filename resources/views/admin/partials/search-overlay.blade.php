<div id="search-overlay">
    <a class="close-search-overlay"></a>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h2>Search for <span class="entity"></span></h2>
            <form id="searchForm" class="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset class="form-group col-md-3">
                     <div class="dropdown">
                        <button class="entity-type-button btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subscribers
                        </button>
                        <div class="dropdown-menu entity-dropdown-menu" aria-labelledby="dropdownMenu">
                            <a class="dropdown-item entity-dropdown-item active">Everything</a>
                            <a class="dropdown-item entity-dropdown-item">Subscribers</a>
                            <a class="dropdown-item entity-dropdown-item">Campaigns</a>
                            <a class="dropdown-item entity-dropdown-item">Messages</a>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-9">
                    <input id="global-search" type="text" class="form-control" name="query" id="query" placeholder="Search for Subscribers">
                    <a href="#" class="global-search-button pull-right"><i class="fa fa-search"></i></a>
                </fieldset>
            </form>
        </div>
    </div>
</div>