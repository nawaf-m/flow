# Flow

![alt mina_stampede](minaStampede.jpg "Mina Stampede 2015")

## Inspiration
On September 2015, more than 2,400 pilgrims died during the Mina stampede tragedy. The media labeled it as the deadliest Hajj disaster in history. We want to build a solution that prevents such tragedy from happening again. We want to save lives. 

## Solution - what it does
Flow is a solution designed to equip the Ministry of Hajj and official Hajj organizers with the capability of real-time monitoring of pilgrims’ traffic, the ability to predict and prevent dangerous congestions, and seamless Tafweej scheduling (current mechanism for organizing the traffic of pilgrims) updates. 

## How it works
![alt system_model](systemModel.png "Flow System Model")

Flow is composed of three main elements:
1. FlowDashboard: a centralized intelligence dashboard. It is a web-based dashboard used by the Hajj organizing entities for monitoring and controlling pilgrims’ traffic. 
2. FlowNetwork: designed as a mesh network and as an independent reliable WiFi network to provide connectivity between the solution’s components.
3. FlowPoint: a data collection tool (wearable or mobile app) used by the Hajj campaign guides. 

## How we built it
**What Is Done So Far**

FlowDashboard: The web-based dashboard that provides centralized intelligence to Hajj organizers has been prototyped. The React JS library has been used for developing the user interface. A mock user interface to simulate the usage of the wearable device or smartphone by the pilgrimage guide has been created to be used during the demo.

![alt FlowDashboard](FlowDashboard.png "Flow Dashboard")

**Technology Required for Remaining Components**

FlowNetwork:

FlowPoint: a simple wearable device with GPS tracking and WiFi chips that will be sending its location to the FlowDashboard frequently, and has a small screen for the Hajj guide to receive instructions on how to proceed. _(for the purpose of the demo we will use mobile apps)._

## Challenges we ran into
**Communication**

Challenge:
There is an immense pressure on mobile networks and the Internet at the 4 Hajj locations, as well as during traveling in between them. Data feeds in real-time, which is the essence of Flow, require a reliable strong communications network. 

Solution:
Flow communication will ride on a Multi-Hop Wireless Mesh Network, operating on a reserved frequency, resulting in a seamless communication channel. This mesh network will work as the Flow backbone, with ruggedized hardware to withstand extreme environmental conditions and a few strategically chosen portals to connect to the Internet.

**Adoption Resistance**

Challenge:
We knew we could not enforce wearables on all pilgrims, but we wanted to find a way to track pilgrims’ locations, without being intrusive. 

Solution:
Pilgrims are organized and led in campaigns. Every group of pilgrims is accompanied by a campaign leader, who accompanies them throughout their journey. We chose campaign leaders as a data point, to represent their respective campaign of pilgrims. Since campaign leaders report to the Ministry of Hajj, which the solution Flow is built for, it will be mandated on them to sport Flow wearables. Consequently, campaign leaders are the point of authority on-site, who decide when a campaign starts traveling towards a location to perform a rite.


**Accessibility and Ease of Use**

Challenge:
Campaign leaders are fully pre-occupied throughout the 5-day pilgrimage. Grabbing their attention for time-sensitive alerts can be difficult. Additionally, the less intrusive the tracking and alerting solution is, the better. 

Solution:	
Flow endpoints will be practical wearables that contain GPS trackers and wifi chipsets. Wearables, named FlowPoints, are worn on the wrist to free up hands for multitasking purposes. The Flow team decided to opt out of using a smartphone app as their platform, but are utilizing it in the meantime to showcase the solution at the Hajj Hackathon, due to lack of hardware at the venue.

## Accomplishments that we're proud of
* Developing the idea of a reliable Wifi Mesh Network as the backbone for our solution.
* Achieving a reliable level of abstraction by consolidating pilgrim campaigns to their group leaders, which reduces the number of users we need to rely on to track the whole pilgrimage and have a working solution. 

## What we learned
* You cannot mandate a solution on a mass of people and expect it to work as anticipated. It’s better to create a solution that has an automatic opt-in (a solution based on fingerprints; everyone has fingerprints) than to have a solution where we depend on people to opt-in
* Some Hajj challenges are related. Building a solution to one challenge in the Hajj experience will be consequence touch upon solving a few other challenges.
* We were exposed to a more detailed narration of the Hajj experience, from many perspectives (officials, volunteers on-site, organizers, pilgrims), which has helped us have a deeper understanding of the problems at hand.  

## What's next for K-002-Flow
* Utilize AI technologies for predictive analysis:
  * Use of AI and search algorithms to predict collisions given the location of guides 
  * Use of machine learning - as a time-series prediction problem - to predict the number of pilgrims per hour in a certain location 
  * Use of deep learning for image analysis for multiple predictions:
    * Congestion areas 
    * Outliers 
  * Use of machine learning - as a classification problem - for automating action-taking when alarming scenarios are detected 
* Analyze the flow of people to determine ways to ease the congestion
* Apply the solution on other crowd control cases, e.g. Tawaf al Wida and beyond Hajj


Judges, we need your vote to make this a reality. We need your vote to save people’s lives.
