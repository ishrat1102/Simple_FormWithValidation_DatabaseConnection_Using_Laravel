<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FORM</title>
    <style>
        h1 {
            color: orange;
        }

        fieldset {
            width: 80%;
            background-color: floralwhite;
        }

        legend {
            background-color: salmon;
            color: white;
            width: 120px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        table#t1,
        td,
        th {
            padding-top: 3px;
            padding-bottom: 3px;
        }
    </style>
</head>

<body>
    <h1><i>FORM DEMO</i></h1>
    <div class=container>
        <form action="{{url('/')}}/register/update}}" method="post">
            @csrf

            <fieldset>
                <legend>Fill up</legend>
                <table id="t1">
                    <input class="form-control" type="hidden" name="user_id" value="{{$Demo_registration->user_id}}"></input>
                    <tr>
                        <td><label class="form-label" for="name">NAME:</label></td>
                        <td>
                            <input class="form-control" type="textbox" name="name" placeholder="name" size="20" value="{{$Demo_registration->name}}"></input>
                            <span class='text-danger'>
                                @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </td>

                    </tr>

                    <tr>
                        <td><label class="form-label" for="phone">PHONE:</label>
                        </td>
                        <td>
                            <input class="form-control" type="textbox" name="phone" placeholder="phone" size="11" value="{{$Demo_registration->phone}}"></input>
                            <span class='text-danger'>
                                @error('phone')
                                {{$message}}
                                @enderror
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td><label class="form-label" for="email">EMAIL:</label>
                        </td>
                        <td>
                            <input class="form-control" placeholder="email" name="email" value="{{$Demo_registration->email}}"></input>
                            <span class='text-danger'>
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td><label class="form-label" for="birthdate">BIRTHDAY:
                            </label></td>
                        <td>

                            <input class="form-control" type="date" name="dob" value="{{$Demo_registration->dob}}"></input>
                            <span class='text-danger'>
                                @error('dob')
                                {{$message}}
                                @enderror
                            </span>
                        </td>

                    </tr>



                    <tr>
                        <td><label class="form-check-label" for="nationality">NATIONALITY:</label>
                        </td>

                        <td>BANGLADESHI <input class="form-check-input" type="checkbox" name="nationality" value="bangladeshi" {{$Demo_registration->nationality == "bangladeshi" ? "checked" : ""}}> </input></td>

                        <td>
                            TURKISH <input class="form-check-input" type="checkbox" name="nationality" value="turkish" {{$Demo_registration->nationality == "turkish" ? "checked" : ""}}></input>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="gender">GENDER:</label>
                        </td>

                        <td> MALE <input class="form-check-input" type="radio" name="gender" value="male" {{$Demo_registration->gender == "male" ? "checked" : ""}}></input></td>

                        <td>FEMALE <input class="form-check-input" type="radio" name="gender" value="female" {{$Demo_registration->gender == "female" ? "checked" : ""}}></input></td>
                    </tr>

                    <tr>
                        <td><label class="form-label" for="hobby">HOBBY:</label>
                        </td>
                        <td>
                            <select class="form-select" name="hobby" size="1" multiple>
                                <option value=" reading" {{$Demo_registration->hobby== "reading" ? "selected" : ""}}>READING</option>
                                <option value=" netflix" {{$Demo_registration->hobby== "netflix" ? "selected" : ""}}>NETFLIX</option>
                                <option value="cooking " {{$Demo_registration->hobby== "cooking" ? "selected" : ""}}>COOKING</option>
                                <option value=" drawing" {{$Demo_registration->hobby== "drawing" ? "selected" : ""}}>DRAWING</option>
                            </select>
                        </td>
                    </tr>

                </table id="t2">
            </fieldset>
    </div>
    <div class="container my-2">
        <table width="20%">
            <tr>
                <td><input class="btn btn-success" type="submit" name="submit"></input>
                    <input class="btn btn-danger" type="reset" name="reset"></input>
                </td>
            </tr>
            <tr>
                <td>&nbsp
            </tr>
            </td>
        </table>
    </div>
    </form>

</body>

</html>