<p style="text-align: center">
  <b><u><span style="font-size: 18px;">APPOINTMENT PROFILE/INTAKE</span></u></b>
</p>

    
    <table class="table table-bordered">
  <tbody>
    <tr>
      <td>
          <b><span style="font-size: 10px">CALL IN DATE</span></b>
          <span style="font-size: 10px">
            :&nbsp;{{callInDate}}&nbsp; &nbsp; &nbsp;&nbsp;</span>
            <b><span style="font-size: 10px;">SALES REP</span></b>
            <span style="font-size: 10px">:{{salesRep}}</span>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:black ;">
        
         <b><span style="font-size: 10px">APPT DATE</span></b>
            <span style="font-size: 10px">:{{apptime}}&nbsp; &nbsp;&nbsp;</span>
        <b><span style="font-size: 10px">DAY</span></b>&nbsp;<span style="font-size: 10px;">{{apptdAY}}</span>&nbsp; &nbsp;<span style="font-size: 10px;">&nbsp;</span><b style="font-size: 12px">ARRIVAL TIME WINDOWS</b><span style="font-size: 10px">:</span><span style="font-size: 10px">{{arrivalTimeWindow}}</span>
        <br>
      </td>
    </tr>

    <tr>
      <td>
        <b><span style="font-size: 10px">SITE INFORMATION</span></b><span style="font-size: 10px">:&nbsp;{{siteType}}&nbsp;&nbsp;
          {{#ifEqual siteType 'Other'}}
          <b>&nbsp; &nbsp; &nbsp; &nbsp; DETAILS:</b>&nbsp;{{otherInfo}}
          {{/ifEqual}}
          </span>
      </td>
    </tr>
    <tr>
      <td>
        <span style="font-size: 10px"><b>FIRST NAME</b>&nbsp; {{ firstName }} </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <span style="font-size: 10px"><b>LAST NAME</b>&nbsp; {{ lastName }} </span>
      </td>
    </tr>
    <tr>
      <td>
        <b style="font-size: 10px">ADDRESS:</b><span style="font-size: 10px">&nbsp;{{{address2Street}}} {{{address2Line2}}}</span>
        <b style="font-size: 10px"> &nbsp; &nbsp; CITY:</b><span style="font-size: 10px">{{address2City}}
          &nbsp; 
          <b style="font-size: 10px">City Area:</b>{{cityArea}}
          &nbsp; 
          <b style="font-size: 10px">Zip:</b>{{address2PostalCode}}</span>
      </td>
    </tr>
    <tr>
      <td>
        <b style="font-size: 10px">EMAIL:</b><span style="font-size: 10px">&nbsp;{{emailAddress}}</span>
      </td>
    </tr>
    <tr>
      <td>
        <span style="font-size: 10px"><b>BEST PHONE:</b>{{phoneNumber}}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>CELL:</b>{{cell}}</span>
      </td>
    </tr>
    <tr>
      <td>
        <span style="font-size: 10px"><b>ALTERNATE CONTACT:</b>&nbsp;{{alernateContact}}&nbsp; &nbsp;&nbsp; &nbsp;
          {{#ifEqual alernateContact 'OTHER'}}
          &nbsp; &nbsp; &nbsp; &nbsp; <b>Details </b>{{alernateDetails}}
          {{/ifEqual}}
        </span>
          
          
      </td>
    </tr>
    <tr>
      <td>
        <span style="font-size: 10px"><b>CONTACT INFO:</b>{{contactInfo}}</span>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:black ; text-align: center;"><br><br>
          <b style="font-size: 14px; color: #844343; ">
              {{#if basementSite}}Basement{{/if}} &nbsp; &nbsp;
              {{#if crawlSpace}}Crawl Space{{/if}} &nbsp; &nbsp;
              {{#if exterior}}Exterior{{/if}} &nbsp; &nbsp;
              {{#if other}}Other{{/if}} &nbsp; &nbsp;<br>
          </b>
      </td>
    </tr>
    

    {{#if basementSite}}
    
    
      <tr>
        <td>
            <br>
          <b style="font-size: 14px; "><u>BASEMENT:</u></b><br>
          <span style="font-size: 10px">CURRENTLY WATER? <b>&nbsp; {{basmentWater}}</b></span>
          <span style="font-size: 10px">Is This An ON Going Issue OR New? <b>&nbsp; {{basementongoingissue}}</b></span>
        </td>
      </tr>

      <tr>
        <td>
          <span style="font-size: 10px">Is The Water Coming Through FLOOR | WALL?<b> &nbsp; {{basementWaterComingFrom}}</b></span>
        </td>
      </tr>
      <tr>
        <td>
          <span style="font-size: 10px">Is The Basement FINISHED-UNFINISHED-PARTIALLY?<b> &nbsp; {{basmentStatus}}</b></span>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:black ;">
          <span style="font-size: 10px">Is It Leaking From One Area Or Multiple Areas?<b> &nbsp; {{bASEMENTLEAKING}}</b></span><br>
        </td>
      </tr>
    
    {{/if}}


    {{#if crawlSpace}}
      <tr>
        <td>
            <br>
          <b style="font-size: 14px; "><u>Crawl Space:</u></b><br>
          <span style="font-size: 10px">CURRENTLY WATER? <b>&nbsp; {{crawl}}</b></span>
          <span style="font-size: 10px">How Long Have You Had This Issue?<b>&nbsp; {{crawlIssueTime}}</b></span>
        </td>
      </tr>
      <tr>
        <td>
          <span style="font-size: 10px">Crawl Space Access Inside OR Out Side?<b> &nbsp; {{accessinsideOrOut}}</b></span>
        </td>
      </tr>
      <tr>
        <td style="border-bottom:black ;">
          <span style="font-size: 10px">How Much Water Is There?<b> &nbsp; {{crawlHowMuchWater}}</b></span><br>
        </td>
      </tr>
    
    {{/if}}


    {{#if other}}
      <tr>
        <td>
            <br>
          <b style="font-size: 14px; "><u>Other:</u></b><br>
          <span style="font-size: 10px">Where You Face Problem? <b>&nbsp; {{otherOptions}}</b></span>
        
        </td>
      </tr>

      <tr>
        <td>
            <span style="font-size: 10px">Is There Currently Water?<b>&nbsp; {{otherWater}}</b></span>
        </td>
      </tr>

      <tr>
        <td style="border-bottom:black ;">
            
            <span style="font-size: 10px">Do You Know Where The Water Is Coming From?<b>&nbsp; {{otherWhereWaterComming}}</b></span><br>
        </td>
      </tr>
    
    {{/if}}
    
    
    
    
    
    <tr>
      <td>
          <br>
        <b style="font-size: 14px">Additional Notes: <br></b>
        <span style="font-size: 10px;">{{{description}}} </span>
      </td>
    </tr>

    <tr>
      <td>
          <br>
        <span style="font-size: 10px">How Did You Hear About Perma Dry? <b>&nbsp; {{source}}</b></span>
        {{#ifEqual source 'Other'}}
        <span style="font-size: 10px">&nbsp;&nbsp;&nbsp;&nbsp;Details <b>&nbsp; {{otherDetails}}</b></span>
          {{/ifEqual}}
          {{#ifEqual source 'Referral'}}
        <span style="font-size: 10px">&nbsp;&nbsp;&nbsp;&nbsp;Who Referred <b>&nbsp; {{otherDetails}}</b></span>
          {{/ifEqual}}

        
      </td>
    </tr>

    <tr>
      <td>
          <br>
        <span style="font-size: 10px">Job Type?<b>&nbsp; {{selectLeadType}}</b></span>
      </td>
    </tr>
    

  </tbody>
</table>
<br>
