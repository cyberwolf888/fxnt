@extends('layouts.frontend')

@section('content')
    <div class="entry-content">
        <p><a href="{{ route('tradingresults') }}" target="_blank" rel="noopener"><img class="alignnone wp-image-134 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/tr.png" alt="" width="240" height="75"></a><a href="http://newstrader999.com/wp-content/uploads/2017/01/yt.png">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a><a href="http://www.myfxbook.com/members/fxnt999_" target="_blank" rel="noopener"><img class="alignnone wp-image-133 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/mfb.png" alt="" width="240" height="75"></a><a href="http://newstrader999.com/wp-content/uploads/2017/01/yt.png">&nbsp; &nbsp; &nbsp; &nbsp; </a><a href="https://www.youtube.com/channel/UC1DTbLh5dYpJn65qDY0SuNg" target="_blank" rel="noopener"><img class="alignnone wp-image-170 size-full" src="http://newstrader999.com/wp-content/uploads/2017/01/yt-1.png" width="240" height="75"></a></p>
        <p><b>We can also manage your account using our system:</b></p>
        <h5></h5>
        <p>&nbsp;</p>
        <h5><b>BROKERS &amp; CONDITIONS:</b></h5>
        <p><span style="font-weight: 400;">For Account Management we use mainly&nbsp;brokers from the list of <strong><a href="{{ route('brokers') }}" target="_blank" rel="noopener">BROKERS</a></strong>,&nbsp;but it’s possible to trade on other broker accounts, please contact us for details.</span></p>
        <h5></h5>
        <p>&nbsp;</p>
        <h5><b>DEPOSITS &amp; PROFIT SHARE:</b></h5>
        <p><span style="font-weight: 400;">See the table below for minimum deposit and profit share depending on the amount invested:</span></p>
        <p>&nbsp;</p>
        <table>
            <tbody>
            <tr>
                <td>
                    <h4 style="text-align: center; margin-top: 8px;"><b>DEPOSITS FROM:</b></h4>
                </td>
                <td style="text-align: center;">
                    <h4 style="margin-top: 8px;"><b>OUR SHARE:</b></h4>
                </td>
                <td style="text-align: center;">
                    <h4 style="margin-top: 8px;"><b>YOUR SHARE:</b></h4>
                </td>
                <td style="text-align: center;">
                    <h4 style="margin-top: 8px;"><b>REMARKS:</b></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">$2,222</span></p>
                </td>
                <td style="text-align: center;"><span style="font-weight: 400;">50%</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">50%</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">Minimum Deposit</span></td>
            </tr>
            <tr>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">$5,555</span></p>
                </td>
                <td style="text-align: center;"><span style="font-weight: 400;">45%</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">55%</span></td>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">Recommended Deposit</span></p>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;"><span style="font-weight: 400;">$11,111</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">40%</span></td>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">60%</span></p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;"><span style="font-weight: 400;">$22,222</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">35%</span></td>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">65%</span></p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td style="text-align: center;"><span style="font-weight: 400;">$55,555</span></td>
                <td style="text-align: center;"><span style="font-weight: 400;">30%</span></td>
                <td>
                    <p style="text-align: center; margin-top: 12px;"><span style="font-weight: 400;">70%</span></p>
                </td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <h6></h6>
        <p>&nbsp;</p>
        <h6><b>NOTES:</b></h6>
        <ul>
            <li><span style="font-weight: 400;">We share profits usually after achieving a target profit, for example 500% or 1,000%.</span></li>
            <li><span style="font-weight: 400;">This can take from a few days to a few weeks, so there is no fixed day or period when we share the profits.</span></li>
        </ul>
        <p>&nbsp;</p>
        <h6 style="text-align: center;"><b>FOR FURTHER INFORMATION PLEASE CONTACT US AT:</b></h6>
        <p style="text-align: center;"><a href="mailto:info@forexnt999.com"><span style="font-weight: 400;">info@forexnt999.com</span></a></p>
    </div>
@endsection
