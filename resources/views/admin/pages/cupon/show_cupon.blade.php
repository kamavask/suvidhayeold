@extends('admin.layout.app')
@section('content')

<div class="col-lg-12 col-md-12">
    <div class="card card-static-2 mt-30 mb-30">
        <div class="card-title-2">
            <h4>All Areas</h4>
        </div>
        <div class="card-body-table">
            <div class="table-responsive">
                <table class="table ucp-table table-hover">
                    <thead>
                        <tr>
                            <th style="width:60px"><input type="checkbox" class="check-all"></th>
                            <th style="width:60px">ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="7"></td>
                            <td>1</td>
                            <td>Area Name Here</td>
                            <td>Ludhiana</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="6"></td>
                            <td>2</td>
                            <td>Area Name Here</td>
                            <td>Chandigarh</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>3</td>
                            <td>Area Name Here</td>
                            <td>New Delhi</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
                            <td>4</td>
                            <td>Area Name Here</td>
                            <td>Bangaluru</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
                            <td>5</td>
                            <td>Area Name Here</td>
                            <td>Mumbai</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
                            <td>6</td>
                            <td>Area Name Here</td>
                            <td>Hyderabad</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
                            <td>7</td>
                            <td>Area Name Here</td>
                            <td>Kolkata</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection


  
  

   