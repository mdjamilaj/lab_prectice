<?php
	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('localhost', 'root', '', 'jqueryAutocomplete');
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT name FROM country WHERE name LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul>";

			while ($data = $sql->fetch_array())
				$response .= "<li>" . $data['name'] . "</li>";

			$response .= "</ul>";
		}


		exit($response);
	}
?>
<html>
    <head>
        <title>jQuery Autocomplete</title>
        <style type="text/css">
            ul {
                float: left;
                list-style: none;
                padding: 0px;
                border: 1px solid black;
                margin-top: 0px;
            }

            input, ul {
                width: 250px;
            }

            li:hover {
                color: silver;
                background: #0088cc;
            }
        </style>
    </head>
    <body>
        <input type="text" placeholder="Search Query..." id="searchBox">
        <div id="response"></div>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#searchBox").keyup(function () {
                    var query = $("#searchBox").val();

                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: 'index.php',
                                method: 'POST',
                                data: {
                                    search: 1,
                                    q: query
                                },
                                success: function (data) {
                                    $("#response").html(data);
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var country = $(this).text();
                    $("#searchBox").val(country);
                    $("#response").html("");
                });
            });
        </script>
    </body>
</html>