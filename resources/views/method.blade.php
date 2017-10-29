@extends('layouts.frontend')

@section('content')
    <div class="entry-content">
        <p><a href="http://forexnt999.com/wp-content/uploads/2017/01/yt.png">&nbsp;</a><a href="{{ route('tradingresults') }}" target="_blank" rel="noopener"><img class="alignnone wp-image-134 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/tr.png" alt="" width="240" height="75" /></a><a href="http://newstrader999.com/wp-content/uploads/2017/01/yt.png">&nbsp;&nbsp;</a><a href="http://www.myfxbook.com/members/fxnt999_" target="_blank" rel="noopener"><img class="alignnone wp-image-133 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/mfb.png" alt="" width="240" height="75" /></a><a href="http://newstrader999.com/wp-content/uploads/2017/01/yt.png">&nbsp;&nbsp;</a><a href="https://www.youtube.com/channel/UC1DTbLh5dYpJn65qDY0SuNg" target="_blank" rel="noopener"><img class="alignnone wp-image-170 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/yt-1.png" width="240" height="75" /></a></p>
        <p>&nbsp;</p>
        <h5></h5>
        <h5 style="text-align: center;"></h5>
        <h3 style="text-align: center;"><b>METHOD DESCRIPTION:</b></h3>
        <p>&nbsp;</p>
        <table>
            <tbody>
            <tr>
                <td>
                    <h4 style="text-align: center;"><b>ENTRY:</b></h4>
                </td>
                <td style="text-align: center;">
                    <h4><b>VALUE:</b></h4>
                </td>
                <td>
                    <h4 style="text-align: center;"><b>REMARKS:</b></h4>
                </td>
            </tr>
            <tr>
                <td width="150"><span style="font-weight: 400;">Opening an Order</span></td>
                <td width="200"><span style="font-weight: 400;">5-10 pips Price Shift</span></td>
                <td width="650"><span style="font-weight: 400;">The EA uses Primary Feed (</span><a href="https://www.iqfeed.net/" target="_blank" rel="noopener"><b>IQFeed</b></a><span style="font-weight: 400;">) and then compares it with your broker feed to see if there is a sufficient price shift. If the price shift is big enough, eg. 5-10 pips, it means it’s safe to enter a trade to cover the spread and make sufficient profits.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Closing an Order</span></td>
                <td><span style="font-weight: 400;">5-7 pips Stop-Loss</span></p>
                    <p><span style="font-weight: 400;">3-5 pips Trailing SL</span></td>
                <td><span style="font-weight: 400;">It uses only a Trailing Stop-Loss of 3-5 pips to close winning orders.</span></p>
                    <p><span style="font-weight: 400;">It uses a tight Stop-Loss of about 5-7 pips to minimize the losses in case the price suddenly moves in the opposite direction.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Average Order Time</span></td>
                <td><span style="font-weight: 400;">15-25 min</span></td>
                <td><span style="font-weight: 400;">Some orders are closed earlier due to Stop-Loss activation.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Average Number of Orders</span></td>
                <td><span style="font-weight: 400;">5-10 day</span></td>
                <td><span style="font-weight: 400;">Sometimes there are no orders at all during one day due to low market volatility.</span></p>
                    <p><span style="font-weight: 400;">You can check out some </span><a href="https://www.youtube.com/channel/UC1DTbLh5dYpJn65qDY0SuNg" target="_blank" rel="noopener"><b>VIDEOS</b></a><span style="font-weight: 400;"> to see a few sample trades.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Time-Frame</span><span style="font-weight: 400;"><br />
</span><span style="font-weight: 400;">(TF)</span></td>
                <td><span style="font-weight: 400;">None</span></td>
                <td><span style="font-weight: 400;">All our chart TF are 5M for illustration purposes only, but in fact the EA works on all Time Frames the same way.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Pairs</span></td>
                <td><span style="font-weight: 400;">Majors</span></td>
                <td><span style="font-weight: 400;">It’s possible to trade all pairs, (eg. GBPSEK, USDIDR), but due to high spread and low volatility, we don’t use such “Exotics” or “Crosses”. We use only major pairs, eg. EURUSD, GBPUSD, USDJPY, EURJPY, etc.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Maximum</span></p>
                    <p><span style="font-weight: 400;">Spread</span></td>
                <td><span style="font-weight: 400;">3.5 pips</span></td>
                <td><span style="font-weight: 400;">If the spread is too high, it’s risky to trade any system which keeps the trades open less than 1 hour.</span></td>
            </tr>
            <tr>
                <td><span style="font-weight: 400;">Indicators</span></td>
                <td>FFCalN</td>
                <td>This indicator uses news times based on <a href="http://www.forexfactory.com/calendar.php" target="_blank" rel="noopener">Forex Factory Calendar</a>.</p>
                    <p>There are no other “typical” indicators like MA, RSI, etc.</p>
                    <p>No Channels, Fibonacci, Support/Resistance are used.</td>
            </tr>
            <tr>
                <td>Primary Price Feed</td>
                <td><a href="https://www.iqfeed.net/" target="_blank" rel="noopener">IQFeed</a></td>
                <td>This fast custom-made feed allows the EA to execute trades based on the information received from that feed supplier.</td>
            </tr>
            <tr>
                <td>Default Parameters</td>
                <td>Low Risk</p>
                    <p>Med. Risk</p>
                    <p>High Risk</td>
                <td>The EA has 3 default parameter sets with various risk levels. You don’t have to change any parameters except for the 2 below.</td>
            </tr>
            <tr>
                <td>Other Parameters</td>
                <td>Lot Size</p>
                    <p>News</p>
                    <p>Impact</td>
                <td><span style="font-weight: 400;">You will be able to adjust the Lot Size, for example 0.1, 0.5, 1.0, 5.0 lots etc.</span><br />
                    <span style="font-weight: 400;">You can also choose the type of news you want to trade:</span></p>
                    <ul>
                        <li><span style="font-weight: 400;">High Impact News (HIN).</span></li>
                        <li><span style="font-weight: 400;">Medium Impact News (MIN) (Including HIN).</span></li>
                        <li><span style="font-weight: 400;">Low Impact News (LIN) (Including HIN and MIN).</span></li>
                        <li><span style="font-weight: 400;">The EA can also trade outside news times if there is a high market volatility, but no scheduled news.</span></li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div><!-- .entry-content -->
@endsection
