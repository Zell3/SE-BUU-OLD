<!DOCTYPE html>
<html>

<head>
    <title>Javascript 101</title>
    <style>
        body {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 30%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 6px; /* Reduced padding */
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Jquery Multiple Calculator</h1>
    <label for="my_number">Enter a number:</label>
    <input type="number" id="my_number">
    <button onclick="generateTable()">Submit</button>
    <br><br>
    <table id="my_table">
        <thead>
            <tr>
                <th>Multiplier</th>
                <th>x</th>
                <th>Multiplicand</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function generateTable() {
            let my_number = parseInt($('#my_number').val());
            let my_code_tr = ``;

            for (let i = 1; i <= 24; i++) {
                let result = my_number * i;
                my_code_tr += `<tr><td>${my_number}</td><td>x</td><td>${i}</td><td>${result}</td></tr>`;
            }
            $('#my_tbody').html(my_code_tr);
        }
    </script>
</body>

</html>
