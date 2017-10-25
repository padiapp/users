<html>
<head>
<style>
body{
            font-family: arial;
        }
        .rTable {
            display: table;
            width: 100%;
        }
        .rTableRow {
            display: table-row;
        }
        .rTableHeading {
            display: table-header-group;
            background-color: #ddd;
        }
        .rTableCell, .rTableHead {
            display: table-cell;
            padding: 3px 10px;
        }
        .rTableHeading {
            display: table-header-group;
            background-color: #ddd;
            font-weight: bold;
        }
        .rTableFoot {
            display: table-footer-group;
            font-weight: bold;
            background-color: #ddd;
        }
        .rTableBody {
            display: table-row-group;
        }
        .firstcol{
            width:10%;
        }
</style>
</head>
    <body>
        <p>Halo <?php echo $username;?>, <br />
        Berikut ini adalah akun padiApp anda : </p>
        <br /><br />
        <div class="rTable">
            <div class="rTableRow">
                <div class="rTableHead firstcol"><strong>Login</strong></div>
                <div class="rTableHead">
                    <span style="font-weight: bold;">:<?php echo $email;?></span>
                </div>
            </div>
            <div class="rTableRow">
                <div class="rTableHead firstcol"><strong>Password</strong></div>
                <div class="rTableHead">
                    <span style="font-weight: bold;">:<?php echo $password;?></span>
                </div>
            </div>
            <div class="rTableRow">
                <div class="rTableHead firstcol"><strong>Tautan</strong></div>
                <div class="rTableHead">
                    <span style="font-weight: bold;">:https://database.padinet.com</span>
                </div>
            </div>
        </div>
        <br /></br />
        <f4>Regards</f4>
        <p></p>
        <f4>PadiApp</f4>
    </body>
</html>