<?php include('header.php'); ?>

<title>LMS | Course Room</title>

<style>
  .menuTab {
    display: none;
  }
  .col2 {
    display: none;
  }
</style>


<div class="wrapper">

  <div class="breadcrum">
    <div class="col8">
      <div class="headcrum">Build Communication Skills for Professional Success</div>
      <div class="bodycrum">Master business writing, graphic design and business presentation</div>
    </div>
    <div class="col4">
      <div class="headcrum">Customer Service Representative</div>
      <div class="bodycrum"><i class="material-icons">room</i>  <i>Marina, Lagos</i>
      </div>
      <div class="bodycrum"><i style="font-size: 12px;margin-top: 3px;">Staff ID: </i>  <b>001558</b>
      </div>
    </div>
  </div>


  <div class="searchArea"></div>
  
  <div class="week">
    <div class="content">
        <div class="col9">
              
              <a href="#"><div class="weekTab activeWeek">
                <div class="weekly">WEEK</div>
                <div class="weekNum">1</div>
                <i class="material-icons">arrow_drop_down</i>
              </div>
              </a>

            <a href="#">
              <div class="weekTab">
                <div class="weekly">WEEK</div>
                <div class="weekNum">2</div>
                <i class="material-icons">arrow_drop_down</i>
              </div>
             </a>

             <a href="#">
              <div class="weekTab">
                <div class="weekly">WEEK</div>
                <div class="weekNum">3</div>
                <i class="material-icons">arrow_drop_down</i>
              </div>
             </a>

        </div>
    </div>
  </div>


  <div class="videoTab">


     <div class="content" style="background: transparent;">
         <div class="col9">
              
              <video src="videos/test.mp4" controls></video>

              <div class="hightlight">
                 <div class="vTopic">Course Introduction and Objectives</div>
                 <div class="vTime">20 mins</div>
              </div>


              <div class="module">
                 <a href="#"><div class="mod active">TOPIC 1</div></a>
                 <a href="#"><div class="mod">TOPIC 2</div></a>
                 <a href="#"><div class="mod">TOPIC 3</div></a>
                 <a href="#"><div class="mod">TOPIC 4</div></a>
              </div>

         </div>
     </div>
  </div>


  <div class="content">
    
    <div class="col9">
          <div class="addComment"><span class="blue">Contribute to this course</span><i class="material-icons blue" style="float: right;">comments</i></div>


          <div class="case">
              <div class="long">
                <div class="line borderBottomBlue">Course Forum</div>
              </div>
              <div class="caseBody">
                <div class="comment">
                  <div class="ini">JO</div><div class="offline"></div>
                  <div class="commenter">Joy Okere</div>  <span>made a comment</span>
                  <i class="material-icons">thumb_down</i><i class="material-icons blue">thumb_up</i>
                  <div class="commentTopic">AN AFFECTIVE DILEMMA</div>
                  <div class="commentBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi leo urna molestie at elementum.</div>
                  <div class="addComment">  <span class="blue">reply comment</span><i class="material-icons blue">comments</i>
                  </div>
                </div>
                <div class="comment">
                  <div class="ini" style="background: orange">SO</div><div class="online"></div>
                  <div class="commenter">me</div> <span>made a comment</span>
                  <i class="material-icons">thumb_down</i><i class="material-icons blue">thumb_up</i>
                  <div class="commentBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi leo urna molestie at elementum. onsectetur adipiscing elit, sed do eiusmod tempor incid onsectetur adipiscing elit, sed do eiusmod tempor incid</div>
                  <div class="addComment">  <span class="blue">reply comment</span><i class="material-icons blue">comments</i>
                  </div>
                </div>
                <form>
                  <textarea name="" id="" cols="30" rows="10" placeholder="Leave a comment..."></textarea>  
                  <a class="btnBlue"><i class="material-icons">comment</i>Post comment</a>
                </form>
              </div>
          </div>      

    </div>


<?php include('footer.php'); ?>