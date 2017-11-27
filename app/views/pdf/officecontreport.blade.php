<html>
  <head>
   <style>
     @page { margin:30px; }
     .header { position: fixed; left: 0px; top: -150px; right: 0px; height: 150px;  text-align: center; }
     .footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 50px;  }
     .footer .page:after { content: counter(page, upper-roman); }
     .content { margin-top: 0px;  }
   </style>
  <body style="font-size:10px; width:80%;margin: 30px 30px 30px 50px;">
      <?php
      function asMoney($value) {
        return number_format($value, 2);
      }
      ?>
   <div class="footer">
     <p class="page">Page <?php $PAGE_NUM ?></p>
   </div>
   <div class="content">
    <table >
      <tr>
        <td>
        <strong>
          {{ strtoupper($organization->name)}}<br>
          </strong>
          {{ $organization->phone}} |
          {{ $organization->email}} |
          {{ $organization->website}}<br>
          {{ $organization->address}}
        </td>
        <td>
          <strong><h3>DAILY CONTRIBUTIONS REPORT </h3></strong>
        </td>
      </tr>
      <tr>
        <hr>
      </tr>
    </table>
    <br><br>
      <table class="table table-bordered" style="width:70%">
          <tr>
            <td style="width:17%">Member</td><td>{{ucwords($member->name)}}</td>
          </tr>
          <tr>
            <td>Member #</td><td>{{ucwords($member->membership_no)}}</td>
          </tr>
          <tr>
            <?php
                $credits = Contribution::where('member_id',$member->id)->where('is_void',false)
                ->whereBetween('date', array($from, $to))->where('type','=','credit')->sum('amount');
                $debits = Contribution::where('member_id',$member->id)->where('is_void',false)
                ->whereBetween('date', array($from, $to))->where('type','=','debit')->sum('amount');
                $total= $credits - $debits;
             ?>
            <td>Total Contributions:  </td><td><strong>{{asMoney($total)}}</strong></td>
          </tr>
          <tr>
             <td>Period:</td><td><strong>{{date('d-M-Y',strtotime($from)).' to '.date('d-M-Y',strtotime($to))}}</strong></td>
           </tr>
      </table>
      <hr style="border:0; border-top:2px dotted #eee;">
      <table class="table table-bordered" style="width:75%;">
        <tr style="font-weight:bold">
            <td>#</td>
            <td>Date</td>
            <td>Vehicle</td>
            <td>Amount</td>
        </tr>
        <tbody>
          <?php $i=1;?>
          @foreach($contributions as $transaction)
          <tr>
            <td>{{$i}}</td>
          <td>{{ date('d-M-Y',strtotime($transaction->date ))}}</td>
          <?php
              $vehicle= Vehicleincome::where('id','=',$transaction->vehicleincome_id)->get()->first();
              $regno= Vehicle::where('id','=',$vehicle->vehicle_id)->pluck('regno');
          ?>
          <td>{{$regno}}</td>
          <td >{{ asMoney($transaction->amount)}}</td>
        </tr>
        <?php $i++;?>
      @endforeach
        </tbody>
    </table>
   </div>
 </body>
 </html>
