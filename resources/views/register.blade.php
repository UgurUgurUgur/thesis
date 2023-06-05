

@section('content')
    <div class="container">
        <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>

                <button type="submit">Register</button>
            </form>

    </div>


    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card rounded-3">
                <div class="card-body p-4">
      
                  <h4 class="text-center my-3 pb-3">To Do App</h4>
      
                  <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                    <div class="col-12">
                      <div class="form-outline">
                        <input type="text" id="form1" class="form-control" />
                        <label class="form-label" for="form1">Enter a task here</label>
                      </div>
                    </div>
      
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
      
                    <div class="col-12">
                      <button type="submit" class="btn btn-warning">Get tasks</button>
                    </div>
                  </form>
      
                  <table class="table mb-4">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Todo item</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Buy groceries for next week</td>
                        <td>In progress</td>
                        <td>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Renew car insurance</td>
                        <td>In progress</td>
                        <td>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Sign up for online course</td>
                        <td>In progress</td>
                        <td>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          <button type="submit" class="btn btn-success ms-1">Finished</button>
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
