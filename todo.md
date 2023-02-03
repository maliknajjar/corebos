# To Do List

- drop the datasabase and add the data again

- the getDefaultView() cbcvMgmt method doesnt behave properly. if you set a cbcvMgmt record to default its not going to be returned because the already existing ***all*** record is set by default to default. so it will always return the All record.

- remove the first thing to told joe about .. about the prefrence default table

- you can move the getViewsByModule which is in the webservice folder to move in to the customView.

- check how the isPermittedCustomView function works in all other places and make it compatible with the cbcvmanagment

- add a check for the setPrivate in getDefaultView method of cbcvmanagement

- get more information on the status in the customView