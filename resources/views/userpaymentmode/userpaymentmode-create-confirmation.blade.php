<h2>Employees Database</h2>
  <div  ng-controller="UserPaymentController">
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>User_id</th>
                  <th>Payment_mode_id</th>
                  <th>created_at</th>
                  <th>update_at</th>
              </tr>
          </thead>
          <tbody>
              <tr ng-repeat="employee in employees">
                  <td>{{  UserPaymentModeController.id }}</td>
                  <td>{{ UserPaymentModeController.user_id }}</td>
                  <td>{{ UserPaymentModeController.payment_id }}</td>
                  <td>{{ UserPaymentModeController.timestamps }}</td>
                  <td>
                    <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(employee.id)">Delete</button>
                  </td>
              </tr>
          </tbody>
      </table>