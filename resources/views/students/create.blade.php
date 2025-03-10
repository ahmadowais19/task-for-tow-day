
<form action="{{route('students.index')}}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="number">number:</label>
    <input type="text" id="number" name="number" ><br><br>

    .
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="submit">Submit</button>

</form>

