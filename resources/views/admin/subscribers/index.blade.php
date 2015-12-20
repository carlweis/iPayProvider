@extends('admin.layout')
@section('content')
<h1>Subscribers&nbsp;<span>{{$totalSubscribers}}</span></h1>
<section id="subscribers">
    <header>
        <ul id="subscribers-menu" class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Add subscribers</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#add-subscriber-modal">Add a subscriber</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#import-subscribers-modal">Import subscribers</a>
                </div>
            </li>
            <li class="nav-item">
                <a data-entity="subscribers" class="nav-link search-icon"><i class="fa fa-search"></i></a>
            </li>
        </ul>
    </header>
    <div id="tablebar">
        <a class="export-subscribers">Export List</a>
    </div>
    <table id="subscribers-table" class="table table-hover">
        <thead class="thead-default">
            <tr>
                <th>ID</th>
                <th>Mailchimp ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Postal Code</th>
                <th>Member Rating</th>
                <th>Date Added</th>
                <th>Status</th>
                <th>List</th>
                <th>IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
            <tr>
                <td scope="row">{{ $subscriber->id }}</td>
                <td>{{ $subscriber->mailchimp_id }}</td>
                <td>{{ $subscriber->fname }}</td>
                <td>{{ $subscriber->lname }}</td>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->zip }}</td>
                <td>{{ $subscriber->member_rating }}</td>
                <td>{{ $subscriber->timestamp }}</td>
                <td>{{ $subscriber->status }}</td>
                <td>{{ $subscriber->list_name }}</td>
                <td>{{ $subscriber->ip }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section id="paginator">
    {!! $subscribers->render() !!}
</section>
<!-- add subscriber modals -->
<div class="modal fade" id="add-subscriber-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Subscriber</h4>
            </div>
            <form id="add-subscriber-form" action="/admin/subscribers" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Postal Code">
                    </fieldset>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="add-subscriber-button" class="btn btn-primary">Add Subscriber</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- import subscribers modal -->
<div class="modal fade" id="import-subscribers-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Import Subscribers</h4>
            </div>
            <form id="add-subscriber-form" action="/admin/subscribers/import" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <fieldset class="form-group">
                        <label for="import-file">Import File</label>
                        <input type="file" class="form-control-file" id="import-file" name="import-file" accept=".csv">
                        <small class="text-muted">You can import any csv file, which contains rows of data, each having fname, lname, email, and zip fields.</small>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Import Subscribers</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop