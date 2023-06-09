<head>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

@extends('layouts\app')
@section('content')
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">      
      <form class="d-flex justify-content-center align-items-center mb-1">
              <div class="form-outline flex-fill">
                <input type="text" id="form2" class="form-control" />
                <label class="form-label" for="form2">Task title</label>
              </div>
              
                <!-- Priority dropdown  -->
                <div class="form-outline flex-fill ms-2 w-20">
                  <select id="priority" class="form-select">
                    <option value="high">High</option>
                    <option value="middle">Middle</option>
                    <option value="low">Low</option>
                  </select>
                  <label class="form-label" for="priority">Priority</label>
                </div>
              
                <!-- Description textbox -->
                <div class="form-outline flex-fill ms-2">
                  <textarea id="description" class="form-control" rows="1"></textarea>
                  <label class="form-label" for="description">Description</label>
                </div>
              <button type="submit" class="btn btn-info ms-2">Add</button>
            </form>
          </div>
  
            <div class="card">
              <div class="card-header p-3">
                <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
              </div>
              <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
            <table class="table text-white mb-0">
              <thead>
                <tr>
                  <th scope="col">Task</th>
                  <th scope="col">Priority</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="fw-normal">
                 
                  <td class="align-middle">
                    <span>Call Sam For payments</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                 
                  <td class="align-middle">Make payment to Bluedart</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                
                  <td class="align-middle">Office rent</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                 
                  <td class="align-middle">Office grocery shopping</td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
                <tr class="fw-normal">
                
                  <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                  <td class="border-0 align-middle">
                    <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                  </td>
                  <td class="border-0 align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
