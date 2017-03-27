<!DOCTYPE html>
<html>
<head>
    <title>Hmmm Meh</title>
    <style>
    thead th:nth-child(1) {width:10%;}
    thead th:nth-child(2) {width: 15%; }
    thead th:nth-child(3) {width: 20%;}
    thead th:nth-child(4) {width: 5%;}
    thead th:nth-child(5) {width: 5%;}
    thead th:nth-child(6) {width: 5%;}
    thead th:nth-child(7) {width: 5%;}
    thead th:nth-child(8) {width: 5%;}
    thead th:nth-child(9) {width: 5%;}
    thead th:nth-child(10) {width: 5%;}
    thead th:nth-child(11) {width: 5%;}
    thead th:nth-child(12) {width: 15%;}
    th.sortable:hover {
        color:blue;
        text-decoration: underline;
    }
    tbody tr:hover {
        background-color: Hotpink;
    }
    table {
        border-collapse: collapse;
    }
    </style>
    <script defer src="lab.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>
