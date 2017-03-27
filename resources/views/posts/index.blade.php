@extends ('layout')

@section ('content')
<table id="myTable" style="table-layout:fixed; width:100%; border: 3px solid black;">
    <thead>
        <tr>
            <th class="sortable" onclick="sortTable(0)">R</th>
            <th>Flag</th>
            <th>Name</th>
            <th onclick="sortTable(3)">MC</th>
            <th onclick="sortTable(4)">TC</th>
            <th onclick="sortTable(5)">SPE</th>
            <th onclick="sortTable(6)">HW</th>
            <th onclick="sortTable(7)">Bs</th>
            <th onclick="sortTable(8)">KS</th>
            <th onclick="sortTable(9)">Ac</th>
            <th onclick="sortTable(10)">DIL</th>
            <th onclick="sortTable(11)">Sum</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <th>IDN</th>
            <th>Agus</th>
            <th>27.5</th>
            <th>7.5</th>
            <th>35</th>
            <th>8</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>35</th>
            <th>70</th>
        </tr>
        <tr>
            <th>2</th>
            <th>IDN</th>
            <th>Bell</th>
            <th>2.5</th>
            <th>3.5</th>
            <th>25</th>
            <th>3</th>
            <th>5</th>
            <th>3</th>
            <th>12</th>
            <th>15</th>
            <th>30</th>
        </tr>
        <tr>
            <th>3</th>
            <th>IDN</th>
            <th>Agus</th>
            <th>27.5</th>
            <th>7.5</th>
            <th>35</th>
            <th>8</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>35</th>
            <th>70</th>
        </tr>

        <tr>
            <th>4</th>
            <th>IDN</th>
            <th>Agus</th>
            <th>23.5</th>
            <th>7.5</th>
            <th>25</th>
            <th>4</th>
            <th>6</th>
            <th>12</th>
            <th>13</th>
            <th>33</th>
            <th>70</th>
        </tr>
        <tr>
            <th>5</th>
            <th>IDN</th>
            <th>Bell</th>
            <th>2.5</th>
            <th>4.5</th>
            <th>28</th>
            <th>7</th>
            <th>2</th>
            <th>4</th>
            <th>12</th>
            <th>25</th>
            <th>30</th>
        </tr>
        <tr>
            <th>6</th>
            <th>IDN</th>
            <th>Agus</th>
            <th>37.5</th>
            <th>8.5</th>
            <th>21</th>
            <th>3</th>
            <th>4</th>
            <th>8</th>
            <th>13</th>
            <th>20</th>
            <th>35</th>
        </tr>
    </tbody>
</table>


@endsection
