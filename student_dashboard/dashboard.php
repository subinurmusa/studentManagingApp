<?php
require "header.php";

?>
<?php
require "navBar.php";

?>



<div class="page-content p-5">
    <section class="row">

        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Shades_of_blue.png"
                                alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">
                                <?php echo $_SESSION["username"]; ?>
                            </h5>
                            <h6 class="text-muted mb-0">
                                <?php echo $_SESSION["email"]; ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Recent students</h4>
                </div>

                <div class="card-content pb-4">

                    <?php $sql = $db->prepare("SELECT * FROM  registration ");

                    $sql->execute();

                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {


                        ?>
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                            <?php $foto = $row["profileFoto"] == null ? "https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1200px-User-avatar.svg.png" : $row["profileFoto"] ?>
                                                <img src="<?php echo $foto ?>">
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1"><?php echo $row["username"] ?></h5>
                                                <h6 class="text-muted mb-0"><?php echo $row["email"] ?></h6>
                                            </div>
                                        </div>
                    <?php } ?>
                    <div class="px-4">
                        <a href="student.php" class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>
                            See All the Students </a>
                    </div>
                </div>
            </div>
            

        </div>
        <div class=" col-8 d-flex justify-content-right">
        <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit" style="min-height: 315px;">
                            <div id="apexcharts1bn26qgg" class="apexcharts-canvas apexcharts1bn26qgg apexcharts-theme-light" style="width: 812px; height: 300px;"><svg id="SvgjsSvg1506" width="812" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="812" height="300"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div></foreignObject><g id="SvgjsG1612" class="apexcharts-yaxis" rel="0" transform="translate(9.51767635345459, 0)"><g id="SvgjsG1613" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1616">32</tspan><title>32</title></text><text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif" x="20" y="89.64879984569549" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1619">24</tspan><title>24</title></text><text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif" x="20" y="147.89759969139098" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1622">16</tspan><title>16</title></text><text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif" x="20" y="206.14639953708647" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1625">8</tspan><title>8</title></text><text id="SvgjsText1627" font-family="Helvetica, Arial, sans-serif" x="20" y="264.3951993827819" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1628">0</tspan><title>0</title></text></g></g><g id="SvgjsG1508" class="apexcharts-inner apexcharts-graphical" transform="translate(39.51767635345459, 30)"><defs id="SvgjsDefs1507"><linearGradient id="SvgjsLinearGradient1511" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1512" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1513" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1514" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask1bn26qgg"><rect id="SvgjsRect1516" width="766.4823236465454" height="232.99519938278195" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask1bn26qgg"></clipPath><clipPath id="nonForecastMask1bn26qgg"></clipPath><clipPath id="gridRectMarkerMask1bn26qgg"><rect id="SvgjsRect1517" width="766.4823236465454" height="236.99519938278195" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1515" width="44.47813554604849" height="232.99519938278195" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1511)" class="apexcharts-xcrosshairs" y2="232.99519938278195" filter="none" fill-opacity="0.9"></rect><line id="SvgjsLine1551" x1="0" y1="233.99519938278195" x2="0" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1552" x1="63.54019363721212" y1="233.99519938278195" x2="63.54019363721212" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1553" x1="127.08038727442424" y1="233.99519938278195" x2="127.08038727442424" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1554" x1="190.62058091163635" y1="233.99519938278195" x2="190.62058091163635" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1555" x1="254.16077454884848" y1="233.99519938278195" x2="254.16077454884848" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1556" x1="317.7009681860606" y1="233.99519938278195" x2="317.7009681860606" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1557" x1="381.2411618232727" y1="233.99519938278195" x2="381.2411618232727" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1558" x1="444.7813554604848" y1="233.99519938278195" x2="444.7813554604848" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1559" x1="508.3215490976969" y1="233.99519938278195" x2="508.3215490976969" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1560" x1="571.8617427349091" y1="233.99519938278195" x2="571.8617427349091" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1561" x1="635.4019363721212" y1="233.99519938278195" x2="635.4019363721212" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1562" x1="698.9421300093334" y1="233.99519938278195" x2="698.9421300093334" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1563" x1="762.4823236465455" y1="233.99519938278195" x2="762.4823236465455" y2="239.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1547" class="apexcharts-grid"><g id="SvgjsG1548" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1565" x1="0" y1="58.24879984569549" x2="762.4823236465454" y2="58.24879984569549" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1566" x1="0" y1="116.49759969139097" x2="762.4823236465454" y2="116.49759969139097" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1567" x1="0" y1="174.74639953708646" x2="762.4823236465454" y2="174.74639953708646" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1549" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1570" x1="0" y1="232.99519938278195" x2="762.4823236465454" y2="232.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1569" x1="0" y1="1" x2="0" y2="232.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1550" class="apexcharts-grid-borders"><line id="SvgjsLine1564" x1="0" y1="0" x2="762.4823236465454" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1568" x1="0" y1="232.99519938278195" x2="762.4823236465454" y2="232.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1611" x1="0" y1="233.99519938278195" x2="762.4823236465454" y2="233.99519938278195" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1518" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1519" class="apexcharts-series" rel="1" seriesName="sales" data:realIndex="0"><path id="SvgjsPath1524" d="M 9.531029045581814 232.99619938278195 L 9.531029045581814 167.46629955637454 L 54.00916459163031 167.46629955637454 L 54.00916459163031 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 9.531029045581814 232.99619938278195 L 9.531029045581814 167.46629955637454 L 54.00916459163031 167.46629955637454 L 54.00916459163031 232.99619938278195 Z" pathFrom="M 9.531029045581814 232.99619938278195 L 9.531029045581814 232.99619938278195 L 54.00916459163031 232.99619938278195 L 54.00916459163031 232.99619938278195 L 54.00916459163031 232.99619938278195 L 54.00916459163031 232.99619938278195 L 54.00916459163031 232.99619938278195 L 9.531029045581814 232.99619938278195 Z" cy="167.46529955637453" cx="73.07122268279393" j="0" val="9" barHeight="65.52989982640743" barWidth="44.47813554604849"></path><path id="SvgjsPath1526" d="M 73.07122268279393 232.99619938278195 L 73.07122268279393 87.37419976854324 L 117.54935822884242 87.37419976854324 L 117.54935822884242 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 73.07122268279393 232.99619938278195 L 73.07122268279393 87.37419976854324 L 117.54935822884242 87.37419976854324 L 117.54935822884242 232.99619938278195 Z" pathFrom="M 73.07122268279393 232.99619938278195 L 73.07122268279393 232.99619938278195 L 117.54935822884242 232.99619938278195 L 117.54935822884242 232.99619938278195 L 117.54935822884242 232.99619938278195 L 117.54935822884242 232.99619938278195 L 117.54935822884242 232.99619938278195 L 73.07122268279393 232.99619938278195 Z" cy="87.37319976854323" cx="136.61141632000604" j="1" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><path id="SvgjsPath1528" d="M 136.61141632000604 232.99619938278195 L 136.61141632000604 14.563199961423857 L 181.08955186605453 14.563199961423857 L 181.08955186605453 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 136.61141632000604 232.99619938278195 L 136.61141632000604 14.563199961423857 L 181.08955186605453 14.563199961423857 L 181.08955186605453 232.99619938278195 Z" pathFrom="M 136.61141632000604 232.99619938278195 L 136.61141632000604 232.99619938278195 L 181.08955186605453 232.99619938278195 L 181.08955186605453 232.99619938278195 L 181.08955186605453 232.99619938278195 L 181.08955186605453 232.99619938278195 L 181.08955186605453 232.99619938278195 L 136.61141632000604 232.99619938278195 Z" cy="14.562199961423858" cx="200.15160995721817" j="2" val="30" barHeight="218.4329994213581" barWidth="44.47813554604849"></path><path id="SvgjsPath1530" d="M 200.15160995721817 232.99619938278195 L 200.15160995721817 87.37419976854324 L 244.62974550326666 87.37419976854324 L 244.62974550326666 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 200.15160995721817 232.99619938278195 L 200.15160995721817 87.37419976854324 L 244.62974550326666 87.37419976854324 L 244.62974550326666 232.99619938278195 Z" pathFrom="M 200.15160995721817 232.99619938278195 L 200.15160995721817 232.99619938278195 L 244.62974550326666 232.99619938278195 L 244.62974550326666 232.99619938278195 L 244.62974550326666 232.99619938278195 L 244.62974550326666 232.99619938278195 L 244.62974550326666 232.99619938278195 L 200.15160995721817 232.99619938278195 Z" cy="87.37319976854323" cx="263.69180359443027" j="3" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><path id="SvgjsPath1532" d="M 263.69180359443027 232.99619938278195 L 263.69180359443027 160.1851995756626 L 308.16993914047873 160.1851995756626 L 308.16993914047873 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 263.69180359443027 232.99619938278195 L 263.69180359443027 160.1851995756626 L 308.16993914047873 160.1851995756626 L 308.16993914047873 232.99619938278195 Z" pathFrom="M 263.69180359443027 232.99619938278195 L 263.69180359443027 232.99619938278195 L 308.16993914047873 232.99619938278195 L 308.16993914047873 232.99619938278195 L 308.16993914047873 232.99619938278195 L 308.16993914047873 232.99619938278195 L 308.16993914047873 232.99619938278195 L 263.69180359443027 232.99619938278195 Z" cy="160.1841995756626" cx="327.23199723164237" j="4" val="10" barHeight="72.81099980711936" barWidth="44.47813554604849"></path><path id="SvgjsPath1534" d="M 327.23199723164237 232.99619938278195 L 327.23199723164237 87.37419976854324 L 371.7101327776909 87.37419976854324 L 371.7101327776909 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 327.23199723164237 232.99619938278195 L 327.23199723164237 87.37419976854324 L 371.7101327776909 87.37419976854324 L 371.7101327776909 232.99619938278195 Z" pathFrom="M 327.23199723164237 232.99619938278195 L 327.23199723164237 232.99619938278195 L 371.7101327776909 232.99619938278195 L 371.7101327776909 232.99619938278195 L 371.7101327776909 232.99619938278195 L 371.7101327776909 232.99619938278195 L 371.7101327776909 232.99619938278195 L 327.23199723164237 232.99619938278195 Z" cy="87.37319976854323" cx="390.77219086885447" j="5" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><path id="SvgjsPath1536" d="M 390.77219086885447 232.99619938278195 L 390.77219086885447 14.563199961423857 L 435.25032641490293 14.563199961423857 L 435.25032641490293 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 390.77219086885447 232.99619938278195 L 390.77219086885447 14.563199961423857 L 435.25032641490293 14.563199961423857 L 435.25032641490293 232.99619938278195 Z" pathFrom="M 390.77219086885447 232.99619938278195 L 390.77219086885447 232.99619938278195 L 435.25032641490293 232.99619938278195 L 435.25032641490293 232.99619938278195 L 435.25032641490293 232.99619938278195 L 435.25032641490293 232.99619938278195 L 435.25032641490293 232.99619938278195 L 390.77219086885447 232.99619938278195 Z" cy="14.562199961423858" cx="454.31238450606656" j="6" val="30" barHeight="218.4329994213581" barWidth="44.47813554604849"></path><path id="SvgjsPath1538" d="M 454.31238450606656 232.99619938278195 L 454.31238450606656 87.37419976854324 L 498.7905200521151 87.37419976854324 L 498.7905200521151 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 454.31238450606656 232.99619938278195 L 454.31238450606656 87.37419976854324 L 498.7905200521151 87.37419976854324 L 498.7905200521151 232.99619938278195 Z" pathFrom="M 454.31238450606656 232.99619938278195 L 454.31238450606656 232.99619938278195 L 498.7905200521151 232.99619938278195 L 498.7905200521151 232.99619938278195 L 498.7905200521151 232.99619938278195 L 498.7905200521151 232.99619938278195 L 498.7905200521151 232.99619938278195 L 454.31238450606656 232.99619938278195 Z" cy="87.37319976854323" cx="517.8525781432787" j="7" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><path id="SvgjsPath1540" d="M 517.8525781432787 232.99619938278195 L 517.8525781432787 160.1851995756626 L 562.3307136893272 160.1851995756626 L 562.3307136893272 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 517.8525781432787 232.99619938278195 L 517.8525781432787 160.1851995756626 L 562.3307136893272 160.1851995756626 L 562.3307136893272 232.99619938278195 Z" pathFrom="M 517.8525781432787 232.99619938278195 L 517.8525781432787 232.99619938278195 L 562.3307136893272 232.99619938278195 L 562.3307136893272 232.99619938278195 L 562.3307136893272 232.99619938278195 L 562.3307136893272 232.99619938278195 L 562.3307136893272 232.99619938278195 L 517.8525781432787 232.99619938278195 Z" cy="160.1841995756626" cx="581.3927717804909" j="8" val="10" barHeight="72.81099980711936" barWidth="44.47813554604849"></path><path id="SvgjsPath1542" d="M 581.3927717804909 232.99619938278195 L 581.3927717804909 87.37419976854324 L 625.8709073265394 87.37419976854324 L 625.8709073265394 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 581.3927717804909 232.99619938278195 L 581.3927717804909 87.37419976854324 L 625.8709073265394 87.37419976854324 L 625.8709073265394 232.99619938278195 Z" pathFrom="M 581.3927717804909 232.99619938278195 L 581.3927717804909 232.99619938278195 L 625.8709073265394 232.99619938278195 L 625.8709073265394 232.99619938278195 L 625.8709073265394 232.99619938278195 L 625.8709073265394 232.99619938278195 L 625.8709073265394 232.99619938278195 L 581.3927717804909 232.99619938278195 Z" cy="87.37319976854323" cx="644.932965417703" j="9" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><path id="SvgjsPath1544" d="M 644.932965417703 232.99619938278195 L 644.932965417703 14.563199961423857 L 689.4111009637516 14.563199961423857 L 689.4111009637516 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 644.932965417703 232.99619938278195 L 644.932965417703 14.563199961423857 L 689.4111009637516 14.563199961423857 L 689.4111009637516 232.99619938278195 Z" pathFrom="M 644.932965417703 232.99619938278195 L 644.932965417703 232.99619938278195 L 689.4111009637516 232.99619938278195 L 689.4111009637516 232.99619938278195 L 689.4111009637516 232.99619938278195 L 689.4111009637516 232.99619938278195 L 689.4111009637516 232.99619938278195 L 644.932965417703 232.99619938278195 Z" cy="14.562199961423858" cx="708.4731590549152" j="10" val="30" barHeight="218.4329994213581" barWidth="44.47813554604849"></path><path id="SvgjsPath1546" d="M 708.4731590549152 232.99619938278195 L 708.4731590549152 87.37419976854324 L 752.9512946009637 87.37419976854324 L 752.9512946009637 232.99619938278195 Z" fill="rgba(67,94,190,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask1bn26qgg)" pathTo="M 708.4731590549152 232.99619938278195 L 708.4731590549152 87.37419976854324 L 752.9512946009637 87.37419976854324 L 752.9512946009637 232.99619938278195 Z" pathFrom="M 708.4731590549152 232.99619938278195 L 708.4731590549152 232.99619938278195 L 752.9512946009637 232.99619938278195 L 752.9512946009637 232.99619938278195 L 752.9512946009637 232.99619938278195 L 752.9512946009637 232.99619938278195 L 752.9512946009637 232.99619938278195 L 708.4731590549152 232.99619938278195 Z" cy="87.37319976854323" cx="772.0133526921273" j="11" val="20" barHeight="145.62199961423872" barWidth="44.47813554604849"></path><g id="SvgjsG1521" class="apexcharts-bar-goals-markers"><g id="SvgjsG1523" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1525" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1527" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1529" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1531" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1533" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1535" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1537" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1539" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1541" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1543" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g><g id="SvgjsG1545" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask1bn26qgg)"></g></g><g id="SvgjsG1522" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g id="SvgjsG1520" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line id="SvgjsLine1571" x1="0" y1="0" x2="762.4823236465454" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1572" x1="0" y1="0" x2="762.4823236465454" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1573" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1574" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1576" font-family="Helvetica, Arial, sans-serif" x="31.77009681860606" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1577">Jan</tspan><title>Jan</title></text><text id="SvgjsText1579" font-family="Helvetica, Arial, sans-serif" x="95.31029045581818" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1580">Feb</tspan><title>Feb</title></text><text id="SvgjsText1582" font-family="Helvetica, Arial, sans-serif" x="158.8504840930303" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1583">Mar</tspan><title>Mar</title></text><text id="SvgjsText1585" font-family="Helvetica, Arial, sans-serif" x="222.39067773024243" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1586">Apr</tspan><title>Apr</title></text><text id="SvgjsText1588" font-family="Helvetica, Arial, sans-serif" x="285.93087136745453" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1589">May</tspan><title>May</title></text><text id="SvgjsText1591" font-family="Helvetica, Arial, sans-serif" x="349.4710650046666" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1592">Jun</tspan><title>Jun</title></text><text id="SvgjsText1594" font-family="Helvetica, Arial, sans-serif" x="413.0112586418787" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1595">Jul</tspan><title>Jul</title></text><text id="SvgjsText1597" font-family="Helvetica, Arial, sans-serif" x="476.5514522790908" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1598">Aug</tspan><title>Aug</title></text><text id="SvgjsText1600" font-family="Helvetica, Arial, sans-serif" x="540.091645916303" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1601">Sep</tspan><title>Sep</title></text><text id="SvgjsText1603" font-family="Helvetica, Arial, sans-serif" x="603.6318395535152" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1604">Oct</tspan><title>Oct</title></text><text id="SvgjsText1606" font-family="Helvetica, Arial, sans-serif" x="667.1720331907273" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1607">Nov</tspan><title>Nov</title></text><text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif" x="730.7122268279395" y="261.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1610">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1629" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1630" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1631" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"></div></div></div></div>
                        </div>
                    </div>
        </div>
        
    </section>
</div>

<?php
require "footer.php";

?>