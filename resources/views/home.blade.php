@extends('master')

@section('konten')


        <style>
            .gb{
                width: 90px;
                height: 90px;
            }

            .p2{

                border-style: solid;
                border-width: 7px;
                border-color: white;
            }

            .pt1{
                width: 150px;
                 border-style: solid;
                border-width: 7px;
                border-color: white;
            }

            .td{

                border-top-color: red;
            }

            .pp1{

               padding-left: 560px;

                align-items: center;
            }

            .nm{
                padding-left: 620px;
            }
        </style>
        <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->name}}</b>.</h4>
        <div style="margin-left: 0em" style="margin-right: 0em">
        <table class="table">
			<thead>
				<tr>
					<th>

                    </th>
				</tr>
			</thead>
			<tbody>
                <div class="pp1">
                        <a href="http://localhost:8000/app">
                            <div >
                                <img class="pt1" src="storage/image/1.jpg" alt="laut"/>
                                <br>

                            </div>
                </div>
                <div class="nm">
                  <b >{{Auth::user()->name}}</b>
                </div>
				<tr>
					<td>
                        <center>
                        <a href="http://localhost:8000/hoby">
                            <img class="pt1" src="storage/image/2.jpg" alt="laut"/>
                        </center>
                    </td>
                    <td>
                        <center>
                        <a href="http://localhost:8000/keahlihan">
                        <img class="pt1" src="storage/image/3.jpg" alt="laut"/>
                        </center>
                    </td>
				</tr>

			</tbody>
		</table>
    </div>
@endsection
