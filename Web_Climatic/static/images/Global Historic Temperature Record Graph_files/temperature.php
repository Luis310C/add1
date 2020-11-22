var modal = "<a name=qlist></a><h2>Frequently Asked Questions</h2><hr size=1><div style='text-align:left;padding-top:20px;'><b>FAQ Source: <a target=_blank href='http://data.giss.nasa.gov/gistemp/faq/'>National Aeronautics and Space Administration Goddard Institute for Space Studies</a></b><br /><br /><h4>Basic Terminology </h4><ul><li><a href='#q101'>    <i>What are temperature <b>anomalies</b> (and why prefer them to <b>absolute</b> temperatures)?</i></a></li><li><a href='#q101a'>    <i>Is the month with the highest anomaly the warmest month overall?</i></a></li><li><a href='#q102'>    <i>Why stick with the 1951-1980 base period?</i></a></li><li><a href='#q103'>    <i>What is L-OTI, the Land-Ocean Temperature Index?</i></a></li><li><a href='#q104'>    <i>What is a meteorological year?</i></a></li></ul><h4>The GISS Surface Temperature Analysis</h4><ul><li><a href='#q201'>    <i>What is the GISTEMP Analysis (the GISS Surface Temperature Analysis)?</i></a></li><li><a href='#q202'>    <i>Why no data from before 1880?</i></a></li><li><a href='#q203'>    <i>Why can't we use just raw data?</i></a></li><li><a href='#q204'>    <i> Can you illustrate the above with a simple example?</i></a></li><li><a href='#q205'>    <i>How can we combine the data of the two stations above in a meaningful way?</i></a></li><li><a href='#q206'>    <i>Do the raw data ever change?</i></a></li><li><a href='#q207'>    <i>Does GISS deal directly with raw (observed) data?</i></a></li> <li><a href='#q208'>    <i>Why use the adjusted rather than the 'raw' data?</i></a></li> <li><a href='#q209'>    <i>Does GISS do any data checking and alterations?</i></a></li> <li><a href='#q210'>    <i>Does NASA/GISS skew the global temperature trends to better match climate models?</i></a></li><li><a href='#q211'>    <i>How accurate are the GISS results (tables, graphs)?</i></a></li><li><a href='#q212'>    <i>Why is the number in the right hand corner of the global maps sometimes different from the corresponding value from the GISTEMP data files (tables and graphs)?</i></a></li><li><a href='#q214'>    <i>How did the GISS analysis and their sources change over time, and how did this affect the results?</i></a></li><li><a href='#q215'>    <i>Why are the US mean temperatures in your 1999 paper so different from later figures?</i></a></li><li><a href='#q216'>    <i>Why are some current station records different from what was shown before 2012?</i></a></li></ul><hr /><h4>Basic Terminology</h4><p id='q101'><b>What are temperature<b> anomalies</b> (and why prefer them to <b>absolute</b> temperatures)?</b><br /><br /> Temperature anomalies indicate how much warmer or colder it is than <i>normal</i> for a particular place and time. For the GISS analysis, <i>normal</i> always means the average over the 30-year period 1951-1980 for that place and time of year. This base period is specific to GISS, not universal. But note that trends do not depend on the choice of the base period: If the absolute temperature at a specific location is 2 degrees higher than a year ago, so is the corresponding temperature anomaly, no matter what base period is selected, since the normal temperature used as base point is the same for both years.<p/><p>Note that regional mean anomalies (in particular global anomalies) are <b>not</b> computed from the current absolute mean and the 1951-80 mean for that region, but from station temperature anomalies. Finding absolute regional means encounters significant difficulties that create large uncertainties. This is why the GISS analysis deals with anomalies rather than absolute temperatures. For a more detailed discussion of that topic, please see <a target=_blank href='http://data.giss.nasa.gov/gistemp/abs_temp.html'>'The Elusive Absolute Temperature'</a>.</p><div id='q101afig' style='float:right;width:285px'><a target=_blank href='http://data.giss.nasa.gov/gistemp/faq/merra2_seas_anom.png'><img src='http://data.giss.nasa.gov/gistemp/faq/merra2_seas_anom.png' style='width:285px;height:230px;border:0' alt='Plot of averaged MERRA2 monthly anomalies' /></a></div><p id='q101a'><b>Is the month with the highest anomaly the warmest month overall?</b><br /><br />No. There is a seasonal cycle in global mean temperature which means that on average, July and August are roughly 3.6&deg;C (6.5&deg;F) warmer than December and January. The <a href='#q101afig'>graph at right</a> shows how much warmer each month is than the annual global mean (derived from the MERRA2 reanalysis over 1980-2015 with an uncertainty range). An anomaly say of 1&#176;C in December would be exceptionally warm for that month, but it is still not warmer than the average July. </p><p>(Graph data: <a target=_blank href='http://data.giss.nasa.gov/gistemp/faq/merra2_seas_anom.txt'>The 1980-2015 seasonal cycle anomaly in MERRA2 along with the 95% uncertainties on the estimate of the mean.</a>)</p><p id='q102'><b>Why stick with the 1951-1980 base period?</b><br /><br /> The primary focus of the GISS analysis are long-term temperature changes over many decades and centuries, and a fixed base period makes the anomalies consistent over time.</p><p>However, organizations like the NWS who are more focused on current weather conditions work with a time frame of days, weeks, or at most a few years. In that situation it makes sense to move the base period occasionally, i.e., to pick a new 'normal' so that roughly half the data of interest are above normal and half below.</p><p id='q103'><b>What is <b>L-OTI</b>, the Land-Ocean Temperature Index?</b><br /><br /> Weather stations reporting surface air temperatures (SATs) are positioned on land, which covers only one third of the planet; the rest is covered by oceans where SAT reports are rare. However, water temperatures (SSTs, sea surface temperatures) are available from ship and buoy reports, and more recently there are also SST estimates derived from satellite data. Whereas SATs and SSTs may be very different (since air warms and cools much faster than water), their anomalies are very similar (if the water temperature is 5 degrees above normal, the air right above the water is also likely to be about 5 degrees warmer than normal). This is not true in the presence of sea ice, since in that case water temperature will stay at the freezing level. This allows us to use SST anomalies as proxies for SAT anomalies in regions without sea ice. <i> L-OTI maps show SAT anomalies over land and sea ice, and show SST anomalies over (ice-free) water.</i></p><p id='q104'><b>What is a meteorological year?</b><br /><br /> When comparing seasonal temperatures, it is convenient to use 'meteorological seasons' based on temperature and defined as groupings of whole months. Thus, Dec-Jan-Feb is the Northern Hemisphere meteorological winter, Mar-Apr-May is N.H. meteorological spring, Jun-Jul-Aug is N.H. meteorological summer and Sep-Oct-Nov is N.H. meteorological autumn.String these four seasons together and you have the meteorological year that begins on Dec. 1 and ends on Nov. 30.</p><p style='text-align:right'>&gt; <a href='#qlist'>Back to Top</a>.</p><h4>The GISS Surface Temperature Analysis</h4>  <p id='q201'><b>What is the GISTEMP Analysis (the GISS Surface Temperature Analysis)?</b><br /><br /> The GISTEMP analysis recalculates consistent temperature anomaly series from 1880 to the present for a regularly spaced array of virtual stations covering the whole globe. Those data are used to investigate regional and global patterns and trends. <p id='q202'><b>Why no data from before 1880?</b><br /><br /> The analysis is limited to the period since 1880 because of poor spatial coverage of stations and decreasing data quality prior to that time. Meteorological station data provide a useful indication of temperature change in the Northern Hemisphere extratropics for a few decades prior to 1880, and there are a small number of station records that extend back to previous centuries. However, we believe that analyses for these earlier years need to be carried out on a station by station basis with an attempt to discern the method and reliability of measurements at each station, a task beyond the scope of our analysis. Global studies of still earlier times depend upon incorporation of proxy measures of temperature change.</p><p id='q203'><b>Why can't we use just raw data?</b><br /><br /> Just averaging the raw data would give results that are highly dependent on the particular locations (latitude and elevation) and reporting periods of the actual weather stations; such results would mostly reflect those accidental circumstances rather than yield meaningful information about our climate. <p id='q204'><b> Can you illustrate the above with a simple example?</b><br /><br /> Assume, e.g., that a station at the bottom of a mountain sent in reports continuously starting in 1880 and assume that a station was built near the top of that mountain and started reporting in 1900. Since those new temperatures are much lower than the temperatures from the station in the valley, averaging the two temperature series would create a substantial temperature drop starting in 1900.</p><p id='q205'><b>How can we combine the data of the two stations above in a meaningful way?</b><br /><br /> What may be done before combining those data is to increase the new data or lower the old ones until the two series seem consistent. How much we have to adjust these data may be estimated by comparing the time period with reports from both stations: After the offset, the averages over the common period should be equal. (This is the basis for the GISS method). As new data become available, the offset determined using that method may change. This explains why additional recent data can impact also much earlier data in any regional or global time series.</p><p>Another approach is to replace both series by their anomalies with respect to a fixed base period. This is the method used by the <a target=_blank href='http://www.cru.uea.ac.uk/cru/data/temperature/'>University of East Anglia's Climatic Research Unit</a> (CRU) in the UK. The disadvantage is that stations that did not report during that whole base period cannot be used.</p><p>More mathematically complex methods are used by <a target=_blank href='https://www.ncdc.noaa.gov/monitoring-references/faq/anomalies.php'>NOAA National Centers for Environmental Information</a> (NOAA/NCEI) and the <a target=_blank href='http://www.berkeleyearth.org/'>Berkeley Earth</a> Project, but the resulting differences are small.</p><p>(Note: The NOAA analysis was formerly performed by the National Climatic Data Center, or NCDC.In spring 2015, NCDC was merged with two other data centers to form NCEI.)</p><p id='q206'><b>Do the raw data ever change?</b><br /><br /> The raw data always stays the same, except for occasional reported corrections or replacements of preliminary data from one source by reports obtained later from a more trusted source.</p> <p id='q207'><b>Does GISS deal directly with raw (observed) data?</b><br /> <br /> No. GISS has neither the personnel nor the funding to visit weather stations or deal directly with data observations from weather stations. GISS relies on data collected by other organizations, specifically, NOAA/NCEI's Global Historical Climatology Network (GHCN) v3 adjusted monthly mean data as augmented by Antarctic data collated by <a target=_blank href='http://www.antarctica.ac.uk/met/READER/'>UK Scientific Committee on Antarctic Research</a> (SCAR) and also NOAA/NCEI's Extended Reconstructed Sea Surface Temperature (ERSST) v3b data.</p><p id='q208'><b>Why use the adjusted rather than the 'raw' data?</b><br /> <br /> GISS uses temperature data for long-term climate studies. For station data to be useful for such studies, it is essential that the time series of observations are consistent, and that any non-climatic temperature jumps, introduced by station moves or equipment updates, are corrected for. In adjusted data the effect of such non-climatic influences is eliminated whenever possible. Originally, only documented cases were adjusted, however the current procedure used by NOAA/NCEI applies an automated system that uses systematic comparisons with neighboring stations to deal with undocumented instances of artificial changes. The processes and evaluation of these procedures are described in numerous publications &mdash; for instance, <a target=_blank href='http://dx.doi.org/10.1029/2009JD013094'>Menne et al., 2010</a> and <a target=_blank href='http://dx.doi.org/10.5194/cp-8-89-2012'>Venema et al., 2012</a> &mdash; and at the <a target=_blank href='http://www.ncdc.noaa.gov/ghcnm/v3.php'>NOAA/NCEI website</a>.</p><p id='q209'><b>Does GISS do any data checking and alterations?</b><br /> <br /> Yes. GISS applies semi-automatic quality control routines listing records that look unrealistic. After manual inspection, those data are either kept or rejected. GISS does make an adjustment to deal with potential artifacts associated with urban heat islands, whereby the long-term regional trend derived from rural stations is used instead of the trends from urban centers in the analysis.<p id='q210'><b>Does NASA/GISS skew the global temperature trends to better match climate models?</b><br /><br /> No.</p><p id='q211'><b>How accurate are the GISS results (tables, graphs)?</b><br /><br /> The GISS results are really estimates based on the available data. Accurate error estimates are hard to obtain. However, it is likely that the largest contribution to the margin of error is given by the temporal and spatial data gaps. That particular margin was estimated as follows: All computations were first made replacing the observed data by complete model data. Then the calculations were repeated after discarding model data where the corresponding observations were missing. Comparisons of  the two results were used to obtain an estimate for that margin of error. Assuming that the other inaccuracies might about double that estimate yielded the error bars for global annual means drawn in <a target=_blank href='http://data.giss.nasa.gov/gistemp/graphs_v3/Fig.A2.gif'>this graph</a>, i.e., for recent years the error bar for global annual means is about &#177;0.05&deg;C, for years around 1900 it is about &#177;0.1&deg;C. The error bars are about twice as big for seasonal means and three times as big for monthly means. Error bars for regional means vary wildly depending on the station density in that region. Error estimates related to homogenization or other factors have been assessed by CRU and the <a target=_blank href='http://www.metoffice.gov.uk/climate-guide/science/science-behind-climate-change/hadley'>Hadley Centre</a> (among others).</p><p name='q212' id='q212'><b>Why is the number in the right hand corner of the global maps sometimes different from the corresponding value from the GISTEMP data files (tables and graphs)?</b><br /><br />This is related to the way we deal with missing data in constructing the global means.</p><p>In the GISTEMP index, the tables of zonal, global, hemispheric means are computed by combining the 100 subbox series for each box of the equal area grid, then combining those to get 8 zonal mean series, finally from those we get the Northern (23.6-90&deg;N), Southern and tropical means, always using the same method.  Hemispheric and global means are area-weighted means of the following 4 regions: Northern mid-to-high latitudes, Southern mid-to-high latitudes, and the Northern and Southern half of the tropics.</p><p>For the global maps, we subdivide the data into the 4 regions 90-24&deg;S, 24-0&deg;S, 0-24&deg;N,24-90&deg;N and fill any gaps in one of those 4 regions by the mean over the available data in that region, and then get a global mean.</p><p>For datasets with full coverage, this should make no difference, but where there is some missing data, there can be a small offset. In such cases the number in the index files should be considered definitive, because in that method the full time series is involved in dealing with the data gaps, whereas for individual maps only the data on that particular map are used to estimate the global mean.</p > <p name='q214' id='q214'><b>How did the GISS analysis and their sources change over time, and how did this affect the results?</b><br /><br />The procedure used in the mid 1980s has not been changed significantly, except for the addition of an urban adjustment scheme. However, more station data became available; also, ocean data became available whose anomalies were used to estimate surface air temperature anomalies over the oceans. More information is presented in the <a target=_blank href='http://data.giss.nasa.gov/gistemp/history'><b>History Section</b></a> and two of these changes are discussed in more detail in the next two questions. The changes in the results stayed within the margin of error indicated in <a href='#q211'>a prior Q&A.</a> <p name='q215' id='q215'><b>Why are the US mean temperatures in your 1999 paper so different from later figures?</b><br /><br /> In the <a target=_blank href='http://pubs.giss.nasa.gov/abs/ha03200f.html'>Hansen et al. (1999)</a> paper the GISS analysis was based on GHCN data alone; in the meantime, the group working at NOAA/NCEI had taken a closer look at the US data, an investigation that resulted in substantial modifications compensating for station moves, procedural changes, etc. These corrected data were made available as 'adjusted USHCN' data. The adjustments and their effects are described <a target=_blank href='http://www.ncdc.noaa.gov/oa/climate/research/ushcn/ushcn.html'>here</a> with a graph showing the effect of each of the 5 individual adjustments <a target=_blank href='http://www.ncdc.noaa.gov/img/climate/research/ushcn/ts.ushcn_anom25_diffs_pg.gif'>here</a>. These adjustments caused an increase of about 0.5&#176;C in the US mean for the period from 1900 to 1990. They had no significant impact on the global mean.  About half of that increase was due to information obtained about station moves (mostly from cities to airports where conditions were generally cooler), the other half from changes in the time of observation (mostly as a consequence of a concerted effort to transition to a uniform time of observation for a whole network of stations). After 1999, GISS replaced the unadjusted USHCN reports by the adjusted reports, and reported on the differences this made in <a target=_blank href='http://pubs.giss.nasa.gov/abs/ha02300a.html' >Hansen et al. (2001)</a>. A list of all changes to the GISS analysis and their impacts is presented in the <a href='http://data.giss.nasa.gov/gistemp/history'><b>History Section</b></a>.</p><p name='q216' id='q216'><b>Why are some current station records different from what was shown before 2012?</b><br /><br /> UK media reports in January 2015 erroneously claimed that differences between the raw GHCN v2 station data <a target=_blank href='station_data_v2'>(archived here)</a> and the current final GISTEMP adjusted data were due to unjustified positive adjustments made in the GISTEMP analysis. Rather, these differences are dominated by the inclusion of appropriate homogeneity corrections for non-climatic discontinuities made in GHCN v3.2 which span a range of negative and positive  values depending on the regional analysis. The impact of all the adjustments can be substantial for some stations and regions, but is small in the global means. These changes occurred in 2011 and 2012 and were documented at that time.</p><p>To recap, from 2001 to 2011, GISS based its analysis on NOAA/NCDC?s temperature collection GHCN v2, the unadjusted version. That collection contained for many locations several records, and GISS used an automatic procedure to combine them into a single record, provided the various pieces had a big enough overlap to estimate the respective offsets; non-overlapping pieces were combined if it did not create discontinuities. In cases of a documented station move, the appropriate offset was applied. No attempt was made to automatically detect and correct inhomogeneities, assuming that because of their random nature they would have little effect on the global mean.</p>  <p>After October 2011, NCDC (now NCEI) added no more data to GHCN v2, so GISS used the replacement GHCN v3.1 as the base data. One of its differences from GHCN v2 is that multiple records are replaced by a single record, obtained by using for each month the report from the highest ranked source without applying any offsets when switching from one source to another. The resulting discontinuities are handled by NCEI when creating the adjusted version. Since the multiple records used by the GISS procedure no longer were available, GISS switched to using the adjusted instead of the unadjusted version of GHCN v3.1.</p>    <p>So the differences between the station records of the old v2 and the current site have mainly two causes:<ol type='a'> <li>the different combination procedures used by GISS and NCEI for stations with multiple records,</li> <li>homogenization applied by NCEI to any station (single or multiple records), whereas none was applied by GISS.</li> </ol>  As part of the v2->v3.1 transition in December 2011, GISS showed its impact <a target=_blank href='http://data.giss.nasa.gov/gistemp/updates_v3/V3vsV2'>on this page</a>. Though substantial for some stations and small regions, it barely changed any global mean trends. However, a few months later, NCEI applied some fixes and refinements to the adjustment scheme, replacing GHCN v3.1 by GHCN v3.2; that change did increase the global trend as documented and <a target=_blank href='ftp://ftp.ncdc.noaa.gov/pub/data/ghcn/v3/GHCNM-v3.2.0-FAQ.pdf'>explained here</a>. Independent replication of the current GISS results is, e.g., provided by the Berkeley Earth dataset, created without the use of NCEI's adjustments. A list of all changes to the GISS analysis and their impacts is presented in the <a target=_blank href='http://data.giss.nasa.gov/gistemp/history'><b>History Section</b></a>.</p > <p style='text-align:right'>&gt; <a href='#qlist'>Back to Top</a>.</p><b>FAQ Source: <a target=_blank href='http://data.giss.nasa.gov/gistemp/faq/'>National Aeronautics and Space Administration Goddard Institute for Space Studies</a></b></div>";
var flag; 
//  get variable theme  
var theme = "gray";
// tag <image> tofront 
	if(theme == 'dark-unica'){
		themenum = 4;
	}else if(theme == 'grid-light'){
		themenum = 3;
	}else if(theme == 'sand-signika'){
		themenum = 3;
	}else{
		themenum = 4;
	}
var pid = "2degreesinstitute";	
var ht_modal;
var ht_faq_content_temp = '';
    ht_faq_content_temp=ht_faq_content_temp+ modal;
var ht_data_source_temp="http://www.temperaturerecord.org/#sources";
var ht_dashboard="https://www.climatelevels.org/?pid=2degreesinstitute&theme=gray";  
var ht_modal_content_temp="<h3 style='cursor:pointer;'>Embed this interactive graph on your website.</h3><div style='text-align:center;border-width:1px 0px 1px 0px;border-style:solid;border-color:silver;padding:20px 0px 20px 0px;'><center><img style='align:center;width:580px;' id='theme_img' src='http://www.temperaturerecord.org/img/graph_white.png' class='img-responsive' /></center></div><p style='text-align:left;'>Choose a theme and then copy & paste the code below where you would like it<br /> to appear on your website.</p><div style='text-align:center;'><input type='hidden' id='s_theme' value='default' />CHOOSE A THEME: &nbsp; <a   style='cursor:pointer' onclick=select_theme('graph_dark','dark-unica')>DARK</a> | <a  style='cursor:pointer' onclick=select_theme('graph_sand','sand-signika')>SAND</a> | <a  style='cursor:pointer' onclick=select_theme('graph_grid','grid-light')>GRID</a> | <a  style='cursor:pointer' onclick=select_theme('graph_white','default')>WHITE</a></div><br>"; 
ht_modal_content_temp=ht_modal_content_temp+'<textarea id="ht_code_area" rows=5 cols=65><div id="temperature-widget-container"></div><script type="text/javascript" src="https://www.climatelevels.org/graphs/js/temperature.php?theme=default&pid=2degreesinstitute"></script></textarea><br /><div style="text-align:right"><a href=http://www.temperaturerecord.org#features target=_blank>Learn about graph features</a></div>';
function select_theme(img,s_theme){
	document.querySelector('#s_theme').value = s_theme;	
	document.querySelector('#theme_img').setAttribute("src", "http://www.temperaturerecord.org/img/"+img+".png");
	document.querySelector('#ht_code_area').innerHTML = '&lt;div id="temperature-widget-container"&gt;&lt;/div&gt;&lt;script type="text/javascript" src="https://www.climatelevels.org/graphs/js/temperature.php?theme='+s_theme+'&pid=2degreesinstitute"&gt;&lt;/script&gt;';
}
function view_theme_graph(){
	window.location.href="widget_test.php?theme=" + document.querySelector('#s_theme').value;
} 
(function() {
// Localize jQuery variable
    var jQuery;

    /******** Load jQuery if not present *********/
    if (window.jQuery === undefined || window.jQuery.fn.jquery !== '1.8.2') {
        var script_tag = document.createElement('script');
        script_tag.setAttribute("type","text/javascript");
        script_tag.setAttribute("src",
            "https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
        if (script_tag.readyState) {
            script_tag.onreadystatechange = function () { // For old versions of IE
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    scriptLoadHandler();
                }
            };
        } else {
            script_tag.onload = scriptLoadHandler;
        }
        // Try to find the head, otherwise default to the documentElement
		if(flag == 1){
			document.getElementById("temperature-widget-container_" + flag).appendChild(script_tag);
		}else{	
		document.getElementById("temperature-widget-container").appendChild(script_tag);
		}
		
    } else {
        // The jQuery version on the window is the one we want to use
        jQuery = window.jQuery;
        load_highcharts();
    }

    /******** Called once jQuery has loaded ******/
    function scriptLoadHandler() {
        // Restore $ and window.jQuery to their previous values and store the
        // new jQuery in our local jQuery variable
        jQuery = window.jQuery.noConflict(true);
        // Call our main function
        load_highcharts();
    }
    function load_highcharts(){
        console.log("load hc start 1");
        var script_tag_2 = document.createElement('script');
        script_tag_2.setAttribute("type","text/javascript");
        script_tag_2.setAttribute("src", "https://www.climatelevels.org/graphs/js/highcharts.js");
        if (script_tag_2.readyState) {
            script_tag_2.onreadystatechange = function () { // For old versions of IE
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    load_export();
                }
            };
        } else {
            script_tag_2.onload = load_export;
        }
		if(flag == 1){
			document.getElementById("temperature-widget-container_" + flag).appendChild(script_tag_2);
		}else{	
			document.getElementById("temperature-widget-container").appendChild(script_tag_2);
		}
    }
    function load_export(){
        var script_tag_3 = document.createElement('script');
        script_tag_3.setAttribute("type","text/javascript");
        script_tag_3.setAttribute("src", "https://www.climatelevels.org/graphs/js/exporting.js");
        if (script_tag_3.readyState) {
            script_tag_3.onreadystatechange = function () { // For old versions of IE
                if (this.readyState == 'complete' || this.readyState == 'loaded') {
                    load_theme();
                }
            };
        } else {
            script_tag_3.onload = load_theme;
        }
		if(flag == 1){
			document.getElementById("temperature-widget-container_" + flag).appendChild(script_tag_3);
		}else{	
			document.getElementById("temperature-widget-container").appendChild(script_tag_3);
		}
    }
	
    function load_theme(){
		if(theme == "default"){
			main();
		}else{
			var script_tag_4 = document.createElement('script');
			script_tag_4.setAttribute("type","text/javascript");
			script_tag_4.setAttribute("src", "https://www.climatelevels.org/graphs/themes/"+theme+".js");
			if (script_tag_4.readyState) {
				script_tag_4.onreadystatechange = function () { // For old versions of IE
					if (this.readyState == 'complete' || this.readyState == 'loaded') {
						main();
					}
				};
			} else {
				script_tag_4.onload = main;
			}
			if(flag == 1){
				document.getElementById("temperature-widget-container_" + flag).appendChild(script_tag_4);
			}else{	
				document.getElementById("temperature-widget-container").appendChild(script_tag_4);
			}
		}
    }
	makeFrame();
	
	function makeFrame() { 
		ifrm = document.createElement("iframe"); 
		 ifrm.setAttribute("src", "https://www.climatelevels.org/graphs/analytics.php?g=temperature&pid=2degreesinstitute"); 
		//ifrm.setAttribute("src", "./graphs/analytics.php"); 
		ifrm.setAttribute("id", "analytics"); 
		ifrm.setAttribute("display", "none"); 
		ifrm.style.width = 1 + "px"; 
		ifrm.style.height = 1 + "px"; 
		if(flag == 1){
			document.getElementById("temperature-widget-container_" + flag).appendChild(ifrm);
		}else{	
			document.getElementById("temperature-widget-container").appendChild(ifrm); 
		}	
	}	
	
    /******** Our main function ********/
    function main() {
         ht_modal = (function(){
            var method = {},
                $overlay,
                $modal,
                $content,
                $close;

            // Center the modal in the viewport
            method.center = function () {
                var top, left;

                top = Math.max(jQuery(window).height() - $modal.outerHeight(), 0) / 2;
                left = Math.max(jQuery(window).width() - $modal.outerWidth(), 0) / 2;
                $modal.css({
                    top:top + jQuery(window).scrollTop(),
                    left:left + jQuery(window).scrollLeft()
                });
            };

            // Open the modal
            method.open = function (settings) {
                $content.empty().append(settings.content);
                $modal.css({
                    width: settings.width || 'auto',
                    height: settings.height || 'auto'
                });
                method.center();
                jQuery(window).bind('resize.modal', method.center);
                $modal.show();
                $overlay.show();
            };

            // Close the modal
            method.close = function () {
                $modal.hide();
                $overlay.hide();
                $content.empty();
                $(window).unbind('resize.modal');
            };

            // Generate the HTML and add it to the document
            $overlay = jQuery('<div id="ht_overlay"></div>');
            $modal = jQuery('<div id="ht_modal"></div>');
            $content = jQuery('<div id="ht_content"></div>');
            $close = jQuery('<a id="ht_close" href="#">close</a>');

            $modal.hide();
            $overlay.hide();
            $modal.append($content, $close);

            jQuery(document).ready(function(){
                jQuery('body').append($overlay, $modal);
            });

             $close.click(function(e){
                e.preventDefault();
                method.close();
             });

            return method;
        }());
        jQuery(document).ready(function($) {
            /******* Load CSS *******/
            var css_link = $("<link>", {
                rel: "stylesheet",
                type: "text/css",
                href: "https://www.climatelevels.org/graphs/css/co2-style.css"
            });
            css_link.appendTo('head');

            /******* Load HTML *******/
				var ht_months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
			var tem_height = 5,tem_width = 14,his_width = 14, distance_tool = 0;
			var aa = "",bb = "";	
						if(flag == 1){
							aa = 'temperature-widget-container_' + flag;
						}else{
							aa = 'temperature-widget-container';							
						}
			
			last_800000_year(aa);
            function last_800000_year(aa){
				$.getJSON("https://www.climatelevels.org/graphs/temperature-daily_data.php?callback=?", function (data) {
						var max_len=data.length;
						var today=data[max_len-1][0] + 24*3600*1000;
						var today_ppm=data[max_len-1][1];
						var text, textWidth;
						var chart = new Highcharts.Chart( {
							chart: {
								renderTo: aa,
								zoomType: 'x',
								events: {
									load: function() {
										var chart = this,
										x = chart.title.alignAttr.x;
										textWidth = chart.title.element.clientWidth;
										text = chart.title.textStr;
										
										var width = chart.chartWidth - 90,
											height = 6; 
										if(this.container.parentNode.id == "temperature-widget-container_1"){	
											chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem_' + flag).add().attr("title","Visit 2 Degrees Institute");
										}else{
											chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem').add().attr("title","Visit 2 Degrees Institute");
										}
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											jQuery('.credits_tem_1').click(function(){
												window.location.href="http://www.2degreesinstitute.org";
											});
										}	
										else{
											jQuery('.credits_tem').click(function(){
												window.location.href="http://www.2degreesinstitute.org";
											});
										}	
										
										if (textWidth / 2 + x >= chart.chartWidth - 130) {
											var textlist = text.split(' ');
											text2 = '';
											for(var i = 0; i < textlist.length; i++){
												if(i == textlist.length - 2){
													text2 = text2 + '<br>' + textlist[i] + ' ';
												}else{
													text2 = text2 + textlist[i] + ' ';
												}
											}
											chart.setTitle({
												useHTML: true,
												text: text2
											})
										} else {
											chart.setTitle({
												useHTML: true,
												text: text
											})
										}
										jQuery('.highcharts-title').css('text-align','center');
										
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', his_width, tem_height, 50, 50).addClass('last_1000_year_' + flag).add().attr("title","Show last 800,000 years");
										}else{
											chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', his_width, tem_height, 50, 50).addClass('last_1000_year').add().attr("title","Show last 800,000 years");
										}	
										 
										chart.container.childNodes[0].children[themenum].parentNode.appendChild(chart.container.childNodes[0].children[themenum]);										
										$('.last_1000_year').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_1000_year(bb);
										})
										$('.last_1000_year_1').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_1000_year(bb);
										}) 
									},
									redraw: function () {
										if(this.container.parentNode.id == "temperature-widget-container_1"){ 
											$('.last_1000_year_' + flag).remove();
											$('.credits_tem_' + flag).remove();
										}else{ 
										$('.last_1000_year').remove();
											$('.credits_tem').remove();
										}  
										$('.highcharts-button').css("display","inline");
										var chart = this, width = chart.chartWidth - 90, height = 6;
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem_' + flag).add().attr("title","Visit 2 Degrees Institute");
										}else{
											chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem').add().attr("title","Visit 2 Degrees Institute");
										} 
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											jQuery('.credits_tem_1').click(function(){
												window.location.href="http://www.2degreesinstitute.org";
											});
										}	
										else{
											jQuery('.credits_tem').click(function(){
												window.location.href="http://www.2degreesinstitute.org";
											});
										}	
										x = chart.title.alignAttr.x;									
										if (textWidth / 2 + x >= width - 50) {
											var textlist = text.split(' ');
											text2 = '';
											for(var i = 0; i < textlist.length; i++){
												if(i == textlist.length - 2){
													text2 = text2 + '<br>' + textlist[i] + ' ';
												}else{
													text2 = text2 + textlist[i] + ' ';
												}
											}
											chart.setTitle({
												useHTML: true,
												text: text2
											})
										} else {										
											chart.setTitle({
												useHTML: true,
												text: text
											})
										}
										jQuery('.highcharts-title').css('text-align','center');
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_1000_year_' + flag).add().attr("title","Show last 800,000 years");
										}else{
										chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_1000_year').add().attr("title","Show last 800,000 years");
											
										} 
										chart.container.childNodes[0].children[themenum].parentNode.appendChild(chart.container.childNodes[0].children[themenum]);										
										$('.last_1000_year').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_1000_year(bb);
										})
										$('.last_1000_year_1').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_1000_year(bb);
										})
									}
								}
							},

							title: {
								useHTML: true,
								text: 'Global Temperature Record'
							},

							subtitle: {
								text: document.ontouchstart === undefined ? 'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
							},

							xAxis: {
								type: 'datetime'
							},

							yAxis: {
								title: {
									useHTML: true,
									text: 'Temperature Anomaly (&deg;C)'
								}
							},

							legend: {
								useHTML: true,
								enabled: false
							},

							tooltip: {
								useHTML: true,
								crosshairs: [true],
								formatter: function () {
									this.x = this.x + 24*3600*1000;
									if(this.x==today){
										var pp="";
									}else{
										var delta=today_ppm-this.y;
										 var pp=(this.y-today_ppm);
										if(delta<=0){
											pp=Math.abs(Math.floor(pp*100)/100)+"&deg;C warmer ";
										}else{
											pp=Math.abs(Math.floor(pp*100)/100)+"&deg;C cooler ";
										}
											pp="<br>"+pp+"than " + ht_months[new Date(today).getMonth()] + " " + new Date(today).getFullYear() + ".";
									}
									var a= new Date(this.x);
									if(a.getFullYear()<1880){
										if(a.getMonth() == 0 && a.getDate() == 1) {
											return 'Year '+a.getFullYear()+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;
										}else{
											return ht_months[a.getMonth()]+' '+a.getDate()+', '+ a.getFullYear()+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;										
										}
									}else{
										return ht_months[a.getMonth()]+' '+ a.getFullYear()+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;
										
									}
								},
								positioner: function(boxWidth, boxHeight, point) { 
									var chart = this.chart,
										plotLeft = chart.plotLeft,
										plotTop = chart.plotTop,
										plotWidth = chart.plotWidth,
										plotHeight = chart.plotHeight,
										distance = 5,
										pointX = point.plotX,
										pointY = point.plotY,
										x = pointX + plotLeft + (chart.inverted ? distance : -boxWidth - distance),
										y = pointY - boxHeight / 2 + plotTop,
										alignedRight;
									if ((x + boxWidth) > (plotLeft + plotWidth)) {
										x -= (x + boxWidth) - (plotLeft + plotWidth);	
										y = pointY - boxHeight + plotTop - distance;
										alignedRight = true;
									}

									if (x < 7) {
										x = plotLeft + pointX + distance;
									}

									if (y < plotTop + 5) {
										y = plotTop + 5;
										if (alignedRight && pointY >= y && pointY <= (y + boxHeight)) {
											y = pointY + plotTop + distance; 
										}
									}
									
									if (y + boxHeight > plotTop + plotHeight) {
										y = Math.max(plotTop, plotTop + plotHeight - boxHeight - distance); // below
									}
									if(70 > y - boxHeight / 2) {
										y = y + 70 - y + boxHeight / 2 - distance_tool;	//alert(y);	
									}
									
									return {x:x, y:y};         
								}
							},

							plotOptions: {
								area: {
									fillColor: {
										linearGradient: {
											x1: 0,
											y1: 0,
											x2: 0,
											y2: 1
										},
										stops: [
											[0, Highcharts.getOptions().colors[0]],
											[1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
										]
									},
									marker: {
										radius: 2
									},
									lineWidth: 1,
									states: {
										hover: {
											lineWidth: 1
										}
									},
									threshold: null
								}
							},
							series: [{
								useHTML: true,
								type: 'line',
     							threshold: null,
								name: 'temperature',// PPB 344. 33% cooler than average.',
								data: data
							}]
						});
				});
			}
			
			function formatCommas(numString) {
				var re = /(-?\d+)(\d{3})/;
				while (re.test(numString)) {
					numString = numString.replace(re, "$1,$2");
				}
				return numString;
			}

			function last_1000_year(aa){
				$.getJSON("https://www.climatelevels.org/graphs/temperature-daily_data_last.php?callback=?", function (data) { 
					var year = 60 * 60 * 24 * 365, max;
                    var max_len=data.length;
 					var today=data[max_len-1][0] + 24*3600*1000;
                    var today_ppm=data[max_len-1][1];
					data.pop();
					var text, textWidth;
                    var chart = new Highcharts.Chart( {
                        chart: {
                            renderTo: aa,
                            zoomType: 'x',
                            events: {
                                load: function() {
									var chart = this,
									x = chart.title.alignAttr.x;
									textWidth = chart.title.element.clientWidth;
									text = chart.title.textStr;
									var width = chart.chartWidth - 90,
										height = 6;
										if(this.container.parentNode.id == "temperature-widget-container_1"){	
										chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem_' + flag).add().attr("title","Visit 2 Degrees Institute");
										}else{
										chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem').add().attr("title","Visit 2 Degrees Institute");
										}
									 
									if(this.container.parentNode.id == "temperature-widget-container_1"){
										jQuery('.credits_tem_1').click(function(){
											window.location.href="http://www.2degreesinstitute.org";
										});
									}	
									else{
										jQuery('.credits_tem').click(function(){
											window.location.href="http://www.2degreesinstitute.org";
										});
									}	
									if (textWidth / 2 + x >= chart.chartWidth - 130) {
										var textlist = text.split(' ');
										text2 = '';
										for(var i = 0; i < textlist.length; i++){
											if(i == textlist.length - 2){
												text2 = text2 + '<br>' + textlist[i] + ' ';
											}else{
												text2 = text2 + textlist[i] + ' ';
											}
										}
										chart.setTitle({
											useHTML: true,
											text: text2
										})
									} else {
										chart.setTitle({
											useHTML: true,
											text: text
										})
									}
									jQuery('.highcharts-title').css('text-align','center');
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_800000_year_temp_' + flag).add().attr("title","Show last 1000 years");
										}else{
										chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_800000_year_temp').add().attr("title","Show last 1000 years");
										} 
										chart.container.childNodes[0].children[themenum].parentNode.appendChild(chart.container.childNodes[0].children[themenum]);										
										$('.last_800000_year_temp').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_800000_year(bb);
										})
										$('.last_800000_year_temp_1').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_800000_year(bb);
									})
								},
                                redraw: function () {
										if(this.container.parentNode.id == "temperature-widget-container_1"){ 
											$('.last_800000_year_temp_' + flag).remove();
											$('.credits_tem_' + flag).remove();
										}else{ 
                                    $('.last_800000_year_temp').remove();
											$('.credits_tem').remove();
										}  
                                     
 									$('.highcharts-button').css("display","inline");
                                    var chart = this, width = chart.chartWidth - 90, height = 6;
										if(this.container.parentNode.id == "temperature-widget-container_1"){
										chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem_' + flag).add().attr("title","Visit 2 Degrees Institute");
										}else{
										chart.renderer.image('https://www.climatelevels.org/graphs/images/logo_2degrees.png', width, height, 46, 46).addClass('credits_tem').add().attr("title","Visit 2 Degrees Institute");
										} 
                                    
									if(this.container.parentNode.id == "temperature-widget-container_1"){
										jQuery('.credits_tem_1').click(function(){
											window.location.href="http://www.2degreesinstitute.org";
										});
									}	
									else{
										jQuery('.credits_tem').click(function(){
											window.location.href="http://www.2degreesinstitute.org";
										});
									}	
									x = chart.title.alignAttr.x;									
									if (textWidth / 2 + x >= width - 50) {
										var textlist = text.split(' ');
										text2 = '';
										for(var i = 0; i < textlist.length; i++){
											if(i == textlist.length - 2){
												text2 = text2 + '<br>' + textlist[i] + ' ';
											}else{
												text2 = text2 + textlist[i] + ' ';
											}
										}
										chart.setTitle({
											useHTML: true,
											text: text2
										})
									} else {										
										chart.setTitle({
											useHTML: true,
											text: text
										})
									}
									jQuery('.highcharts-title').css('text-align','center');
										if(this.container.parentNode.id == "temperature-widget-container_1"){
											chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_800000_year_temp_' + flag).add().attr("title","Show last 1000 years");
										}else{
 										chart.renderer.image('https://www.climatelevels.org/graphs/images/button_history.png', tem_width, tem_height, 50, 50).addClass('last_800000_year_temp').add().attr("title","Show last 1000 years");
										} 
									chart.container.childNodes[0].children[themenum].parentNode.appendChild(chart.container.childNodes[0].children[themenum]);										
									$('.last_800000_year_temp').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_800000_year(bb);
										})
										$('.last_800000_year_temp_1').click(function(){
											bb = this.parentNode.parentNode.parentNode.id; 
											last_800000_year(bb);
										}) 
									 
                                }
                            }
                        },

                        title: {
                            useHTML: true,
                            text: 'Global Temperature Record'
                        },

                        subtitle: {
                            text: document.ontouchstart === undefined ? 'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                        },
						
                        xAxis: {							
							gridLineWidth: 1,
							minorGridLineWidth: 1,
							gridLineColor: 'rgba(255, 255, 255, .1)',
							type: 'datetime',
							labels: {
								formatter: function() {
									var dataMax = this.chart.xAxis[0].dataMax;
								    max = this.chart.xAxis[0].max;
									
									return ((dataMax - this.value) / (year) / 1000).toFixed(0) + 'k years ago'
								}
							  },
							  events: {} 
                        },

                        yAxis: {
                            title: {
                                useHTML: true,
                                text: 'Temperature Anomaly (&deg;C)'
                            }
                        },

                        legend: {
                            useHTML: true,
                            enabled: false
                        },

                        tooltip: {
                            useHTML: true,
							crosshairs: [true],
                            formatter: function () {
								this.x = this.x;
                                if(this.x==today){
                                    var pp="";
                                }else{
                                    var delta=today_ppm-this.y;
                                    var pp=(this.y-today_ppm);						
                                    if(delta<=0){
                                        pp=Math.abs(Math.floor(pp*100)/100)+"&deg;C warmer ";
                                    }else{
                                        pp=Math.abs(Math.floor(pp*100)/100)+"&deg;C cooler ";
                                    }
											pp="<br>"+pp+"than " + ht_months[new Date(today).getMonth()] + " " + new Date(today).getFullYear() + ".";
                                }
								if(Math.abs(this.x/year).toFixed(0) == 1){
									return formatCommas(Math.abs(this.x/year).toFixed(0)) + ' year ago'+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>';
								}else{
									var fDate = Math.abs(this.x/year);
									if(fDate>1000) {
										fDate = Math.floor(fDate/100)*100;
									}
									if(Math.abs(this.x/year)>1000) {
										
											return 'Approx. ' + formatCommas(fDate.toFixed(0)) + ' years ago'+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;
										
									}else{
										if(Math.abs(this.x/year)>191) {
											return 'Approx. ' + formatCommas(fDate.toFixed(0)) + ' years ago'+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;
										}else{
											return formatCommas(fDate.toFixed(0)) + ' years ago'+'<br>Temperature Anomaly: <b>'+this.y+'&deg;C</b>' + pp;
										}
									}
								}
                            },
							positioner: function(boxWidth, boxHeight, point) { 
								var chart = this.chart,
									plotLeft = chart.plotLeft,
									plotTop = chart.plotTop,
									plotWidth = chart.plotWidth,
									plotHeight = chart.plotHeight,
									distance = 5,
									pointX = point.plotX,
									pointY = point.plotY,
									x = pointX + plotLeft + (chart.inverted ? distance : -boxWidth - distance),
									y = pointY - boxHeight / 2 + plotTop,
									alignedRight;
									
								if ((x + boxWidth) > (plotLeft + plotWidth)) {
									x -= (x + boxWidth) - (plotLeft + plotWidth);	
									y = pointY - boxHeight + plotTop - distance;
									alignedRight = true;
								}

								if (x < 7) {
									x = plotLeft + pointX + distance;
								}

								if (y < plotTop + 5) {
									y = plotTop + 5;
									
									if (alignedRight && pointY >= y && pointY <= (y + boxHeight)) {
										y = pointY + plotTop + distance; 
									}
								}
								
								if (y + boxHeight > plotTop + plotHeight) {
									y = Math.max(plotTop, plotTop + plotHeight - boxHeight - distance); // below
								}
								if(70 > y - boxHeight / 2) {
									y = y + 70 - y + boxHeight / 2 - distance_tool;	//alert(y);	
								}
								return {x:x, y:y};         
							}

                        },

                        plotOptions: {
                            area: {
                                fillColor: {
                                    linearGradient: {
                                        x1: 0,
                                        y1: 0,
                                        x2: 0,
                                        y2: 1
                                    },
                                    stops: [
                                        [0, Highcharts.getOptions().colors[0]],
                                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                                    ]
                                },
                                marker: {
                                    radius: 2
                                },
                                lineWidth: 1,
                                states: {
                                    hover: {
                                        lineWidth: 1
                                    }
                                },
                                threshold: null
                            }
                        },

                        series: [{
                            useHTML: true,
							type: 'line',
							lineWidth: 2,
    							threshold: null,
                            name: 'temperature',// PPB 344. 33% cooler than average.',
                            data: data
                        }]
                    });
				});
			}
        });
    }

})();


