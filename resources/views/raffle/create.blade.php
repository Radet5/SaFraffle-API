@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-dark text-light">New Raffle</div>
          <div class="card-body bg-secondary">
            <form method="POST" enctype="multipart/form-data" action="{{ route('raffles.store') }}">
            @csrf
              <div class="form-group row text-light">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input name="name" class="form-control" id="name" placeholder="Name">
                </div>
              </div>
              <div class="form-group row text-light">
                <label for="benefactor" class="col-sm-2 col-form-label">Benefactor</label>
                <div class="col-sm-10">
                  <input name="benefactor" class="form-control" id="benefactor" placeholder="Benefactor">
                </div>
              </div>
              <div class="form-group row text-light">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea name="description" rows=5 class="form-control" id="description" placeholder="Description"></textarea>
                </div>
              </div>
	      <div class="form-group row text-light">
                <label for="begin_date" class="col-sm-2 col-form-label">Begin Date</label>
                <div class="col-sm-10">
                  <input type="date" name="begin_date" class="form-control" id="begin_date">
                </div>
              </div>
              <div class="form-group row text-light">
                <label for="end_date" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-10">
                  <input type="date" name="end_date" class="form-control" id="end_date">
                </div>
              </div>
              <div class="form-group row text-light">
                <label for="ticket_cost" class="col-sm-2 col-form-label">Ticket Cost</label>
                <div class="col-sm-10 input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" min="0" max="255" step="0.05" name="ticket_cost" class="form-control" id="ticket_cost" value="5.00">
                </div>
              </div>
              <div class="form-group row text-light">
                <label class="col-sm-2 col-form-label">Header Img</label>
                <div class="col-sm-10">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="custom-file">
                    <label class="custom-file-label" for="custom-file">Choose Image</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
