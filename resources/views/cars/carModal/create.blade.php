<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" width="100%">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('autocars.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Car Code:</label>
                    <input type="text" class="form-control" name="car_code" placeholder="Car Code">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Car Name:</label>
                    <input type="text" class="form-control" name="car_name" placeholder="Car Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Car Type:</label>
                    <input type="text" class="form-control" name="car_type" placeholder="Car Type">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Car Model:</label>
                    <input type="text" class="form-control" name="car_model" placeholder="Car Model">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Car Prize:</label>
                    <input type="number" class="form-control" name="car_prize" placeholder="Car Prize">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Year Release:</label>
                    <input type="date" class="form-control" name="year_release" placeholder="Year Release">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Monthly:</label>
                    <input type="number" class="form-control" name="monthly" placeholder="Monthly">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Year Coverage:</label>
                    <input type="date" class="form-control" name="year_coverage" placeholder="Year Coverage">
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" style="margin-right:4px;">Reset</button>
                    <button type="submit" class="btn btn-primary">Create Cars</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@yield('createCar')