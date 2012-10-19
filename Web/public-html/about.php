<?php
/*******************************************************************************
 * Copyright (c) 2012 CrisisTracker Contributors (see /doc/authors.txt).
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://opensource.org/licenses/eclipse-1.0.php
 *******************************************************************************/

include('header_start.php');
include('header_end.php');
?>


<div class="left-column-wide">
    <div class="gui-panel textpanel">
	<h1>A new tool for collaborative social media analysis in disaster response</h1>
	<iframe src="http://player.vimeo.com/video/45366518" width="570" height="321" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	<p>During large-scale complex crises such as the Haiti earthquake, the
	Indian Ocean tsunami and the Arab Spring, social media has emerged as a
	source of timely and detailed reports regarding important events.
	However, individual disaster responders, government officials or
	citizens who wish to access this vast knowledge base are met with a
	torrent of information that quickly results in information overload.
	Without a way to organize and navigate the reports, important details
	are easily overlooked and it is challenging to use the data to get an
	overview of the situation as a whole.</p>
	<p>We (researchers at Madeira University, University of Oulu and IBM
	Research) believe that volunteers around the world would be willing to
	assist hard-pressed decision makers with information management, if the
	tools were available. With this vision in mind, we have developed
	CrisisTracker.</p>
	<h2>Automated story detection</h2>
  <p>CrisisTracker offers an alternative way to browse social media
	activity around large-scale events, in particular disasters. The system
	automatically tracks a set of keywords on Twitter and clusters tweets
	based on their word similarity. Information propagates on Twitter mostly
	through duplication, either directly through retweets or by multiple
	people independently talking about the same event, and information about
	a single event is often split on thousands of messages. By clustering 
	messages, each piece of information (a "story") is decoupled from its
	sharing pattern. Once decoupled, information about who and how many people
  shared a piece of information can be used to estimate how important the
  information is, and to whom, without requiring a computer to first understand
  what the information is about.</p>
	<h2>Crowdsourced information management</h2>
	<p>The web interface supports exploration of stories as they unfold in
	real-time; by time, location, topic and named entities. As current
	state-of-the-art text processing algorithms struggle with reliably
	extracting such meta-data from the text in tweets, CrisisTracker
	instead explores the use of
	<a href="http://en.wikipedia.org/wiki/Crowdsourcing" about=”_blank”>crowdsourcing</a>
	techniques. Any user of the
	system can directly contribute tags that make it easier for other users
	to retrieve information and explore stories by similarity. In addition,
	users of the system can influence how tweets are grouped into stories.</p>
  <h2>What is the difference between CrisisTracker and Ushahidi?</h2>
  <p>The biggest difference between the platform and <a href="http://www.ushahidi.com/" target="_blank">Ushahidi</a> is that Ushahidi
  focuses on curation of user-submitted reports, while CrisisTracker mines
  Twitter for reports, clusters them, and supports curation of report clusters.
  Both systems require humans to annotate pieces of information with meta-data
  such as location and report category.</p>
  <p>This means that an Ushahidi deployment generally handles much fewer but
  higher quality reports, as each report is written specifically for the
  platform. CrisisTracker on the other hand can collect information even if
  sources are not aware of the deployment of the system as it listens in to a
  publicly accessible communication channel (Twitter) that people already use
  to share their knowledge in crisis.</p>
  <p>The purpose of CrisisTracker is to create overview of what is being said
  in social media (including rumors and bias towards specific topics) more than
  to create a perfect model of the real world. It helps analysts find where
  reports originated and to get in contact with sources (Twitter accounts). It
  also helps in finding similar but potentially conflicting versions of a
  report. CrisisTracker's contribution is greatest during complex large-scale
  events when it bring order to overwhelming social media feeds consisting
  of hundreds of thousands or millions of tweets over many days. Other tools
  are more suitable for monitoring small-scale localized events that produce
  only a few hundred tweets in total.</p>
    </div>
</div>
<div class="right-column-narrow">
    <div class="gui-panel textpanel">
        <h1>Feedback</h1>
	<p>We are extremely interested in hearing your feedback! Just use the tab on the 
	right, or visit our <a href="https://getsatisfaction.com/crisistracker" target="_blank">discussion forum</a>.</p>
        <h1>Contact</h1>
	<p><a href="http://hci.uma.pt/~jakob" target="_blank">Jakob Rogstadius</a></p>
        <h1>Source code</h1>
        <p>CrisisTracker is free and <a href="https://github.com/JakobRogstadius/CrisisTracker">open source</a>,
        so that you can deploy your own instance or integrate it with your own analysis software.</p>
    </div>
</div>


<?php
include('footer.php');
?>