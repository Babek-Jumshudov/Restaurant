<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
      <div class="contain">
        <div class="left">
          <div>
            <a href="{{route('users')}}"
              ><i class="fa-solid fa-user"></i> <span>Users</span></a
            >
          </div>
          <div>
            <a href="{{route('restaurant')}}"
              ><i class="fa-solid fa-utensils"></i> <span>Restaurants</span></a
            >
          </div>
          <div>
            <a href="{{route('menu')}}"
              ><i class="fa-solid fa-burger"></i> <span>Menu</span></a
            >
          </div>
        </div>
        <div class="right">
          <table border="">
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Composition</th>
              <th>Restaurant</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
            <tr>
              <td><img src="burger.jpg" alt="" /></td>
              <td>Cheeseburger</td>
              <td>Ketchup, mayonnnaise, tomato, <br />Dutc cheese, chicken</td>
              <td>KFC</td>
              <td>3.4 $</td>
              <th>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
              </th>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <button class="btn">+ Add to</button>
    <script src="{{asset('js/admin.js')}}"></script>

  </body>
</html>
