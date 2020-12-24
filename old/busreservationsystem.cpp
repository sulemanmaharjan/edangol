#include<iostream>
#include<string.h>
#include<stdio.h>
#include<fstream>
#include<stdlib.h>
#include<stdio.h>
#include <iomanip>  
using namespace std;

class station
{
	public:
		int stationid;
	char stationname[50];
};

class route
{
    public:
    int routeid;
    station from;
    station to;
    float distance;
   	float ppkm;
   	char fare[50];
   	route()
   	{
   		strcpy(from.stationname,"");
   		strcpy(to.stationname,"");
   		distance=0;
   	fstream f;
   	f.open("fare.txt",ios::in);
   	if(!f.fail())
   	{
   		f>>fare;
   		ppkm=atof(fare);
   	}
   	else
   	{
   		ppkm=10;
	}
   	  	
   	f.close();
	}
	
   
};

class busreservation
{
	float tppp;
	float total;
public:
	int nop;
	route r;
	void displayroute()
	{
	
		route r1;
		fstream f;
		f.open("route.dat",ios::binary|ios::in);
		if(f.fail())
   	{
   		cout<<"no station found"<<endl;
   		  cout<<endl<<"----------------------------"<<endl;
   		return;
   	}
		cout<<"\t\t\t\tRoutes in database"<<endl;
		    cout<<"\t\t________________________________________________________________________________"<<endl;
		    cout<<setw(30)<<"Station A"<<setw(30)<<"stationB"<<setw(30)<<"Distance in km"<<endl;

		while(f.read((char*)&r1,sizeof(r1)))
		{
			
		    cout<<""<<setw(30)<<r1.from.stationname<<setw(30)<<r1.to.stationname<<setw(30)<<r1.distance<<endl;
		}
		 cout<<"\t\t________________________________________________________________________________"<<endl<<endl;
		f.close();
		
	}
	void displaystation()
	{
	
		station s1;
		fstream f;
		f.open("stations.dat",ios::binary|ios::in);
			if(f.fail())
   	{
   		cout<<"no station found"<<endl;
   		  cout<<endl<<"----------------------------"<<endl;
   		return;
   	}
		cout<<"stations in database"<<endl;
		cout<<"----------------------------"<<endl;
		while(f.read((char*)&s1,sizeof(s1)))
		{
			cout<<s1.stationname<<endl;
		}
		 cout<<"----------------------------"<<endl<<endl;
		f.close();
	
	}
	int readstation(station s)
	{
		int anartha=0;
		station s1;
		fstream f;
	
		f.open("stations.dat",ios::binary|ios::in);
		while(f.read((char*)&s1,sizeof(s1)))
		{
			if(strcmpi(s.stationname,s1.stationname)==0)
			{
				anartha=1;
				break;
			}
		}
		f.close();
		return anartha;
	}
	void savestation()
	{
		
		station s;
		cin.ignore();
		cout<<endl<<"--------------Station Info--------------------"<<endl;
	
		
		cout<<"please enter station name"<<endl;
			
		gets(s.stationname);
	
		cout<<endl<<"---------------------------"<<endl;
	if(readstation(s)==0)
	{
	
		fstream f;
		f.open("stations.dat",ios::binary|ios::app);
		f.write((char*)&s,sizeof(s));
		f.close();
		cout<<"station added successfully!!!"
		<<endl<<"-----------------------------------"<<endl;
		
	}
	else
	{
		cout<<"station already exists"<<endl;
		cout<<endl<<"---------------------------------"<<endl;
		
	}
	
	}
	int readroute(route r)
	{
		int anartha=0;
		route r1;
		fstream f;
		f.open("route.dat",ios::binary|ios::in);
		while(f.read((char*)&r1,sizeof(r1)))
		{
			if(
			(strcmpi(r.from.stationname,r1.to.stationname)==0||
			strcmpi(r.to.stationname,r1.to.stationname)==0)&&
			(strcmpi(r.from.stationname,r1.from.stationname)==0||
			strcmpi(r.to.stationname,r1.from.stationname)==0)		
			)
			{
				anartha=1;
				break;
			}
		}
		f.close();
		return anartha;
	}
	int getrouteid()
	{
		int id=0;
		route r1;
		fstream f;
		f.open("route.dat",ios::binary|ios::in);
		while(f.read((char*)&r1,sizeof(r1)))
		{
			id=r1.routeid;
		}
		if(id)
		{
		
		return id+1;
	}
	else
	{
		return 1;
	}
	}
	void saveroute()
	{
		cin.ignore();
			route r;
			cout<<endl<<"--------------Route Info--------------------"<<endl;
		cout<<"please enter from"<<endl;
		gets(r.from.stationname);
			if(readstation(r.from)==0)
			{
				cout<<"station doesnt exist"<<endl;
				
				return;
			}
			cout<<"please enter to"<<endl;
		gets(r.to.stationname);
		if(readstation(r.to)==0)
			{
				cout<<"station doesnt exist"<<endl;
				return;
			}
			cout<<"enter distance between "<<r.from.stationname<<" and "<<r.to.stationname<<endl;
			cin>>r.distance;
	if(readroute(r)==0)
	{
	   // r.routeid=getrouteid();
	    //cout<<r.routeid;
		fstream f;
		f.open("route.dat",ios::binary|ios::app);
		f.write((char*)&r,sizeof(r));
		f.close();
	
	cout<<endl<<"--------------Reservation Info--------------------"<<endl;
	}
	else
	{
		cout<<"route already exists"<<endl;
		cout<<endl<<"--------------Reservation Info--------------------"<<endl;
	}
	
	}
	
	float calculatesingleticket()
	{
		tppp=r.ppkm*r.distance;
		return tppp;
	}
	void calculatetotalprice()
	{
		calculatesingleticket();
		total=tppp*nop;
	}
	void printbill()
	{
		calculatetotalprice();
		cout<<"your total bill is : "<<total<<endl;
		cout<<endl<<"----------------------------------"<<endl;
	}
	void reservebus()
	{
		cout<<endl<<"---------------Reserve Bus-------------------"<<endl;
		cin.ignore();
		cout<<"please enter from"<<endl;
		gets(r.from.stationname);
		cout<<"please enter to"<<endl;
		gets(r.to.stationname);
		
	int valid=0;
		fstream f;
		route r1;
		f.open("route.dat",ios::binary|ios::in);
		while(f.read((char*)&r1,sizeof(r1)))
		{
			if(
			(strcmpi(r.from.stationname,r1.to.stationname)==0||
			strcmpi(r.to.stationname,r1.to.stationname)==0)&&
			(strcmpi(r.from.stationname,r1.from.stationname)==0||
			strcmpi(r.to.stationname,r1.from.stationname)==0)		
			)
			{
				valid=1;
				break;
			}
		
		}
		f.close();
		if(valid==0)
		{
			cout<<"route doesnt exist"<<endl;
		cout<<endl<<"----------------------------------"<<endl;
			return;
		}
			r.distance=r1.distance;
		cout<<"how many passangers???"<<endl;
		cin>>nop;
		cout<<endl<<"--------------Reservation Info--------------------"<<endl;
		showdata();
		
		
	}
	void showdata()
	{
		cout<<endl<<"----------Bill Info--------------"<<endl;
		cout<<"you are travelling from "<<r.from.stationname;
	
		cout<<" to "<<r.to.stationname<<endl;
		
		cout<<"you are "<<nop<<" person "<<endl;
		printbill();
		cout<<endl<<"------------------------"<<endl;
		
	}
	void changeprice()
	{
		cout<<"current price is Rs."<<r.ppkm<<endl;
		cout<<"do you wanna change price ? press 'y' to change "<<endl;
		char ch;
		cin>>ch;
		if(ch=='y')
		{
		
		cout<<"enter new price "<<endl;
		cin>>r.ppkm;
		fstream f;
		f.open("fare.txt",ios::out);
		f<<r.ppkm;
		f.close();
		cout<<"price changed successfulllllly";
		cout<<endl<<"____________________________"<<endl;
	}
	else
	{
	
		cout<<"price  change did not happen"<<endl;
		cout<<endl<<"____________________________"<<endl;
	}
	}
	
};
int main()
{
	busreservation bs;

char c;
do{
cout<<endl<<"\t\t\t\t________________________________________"<<endl;
cout<<"\t\t\t\t** welcome to Archita Bus System Software **";
cout<<endl<<"\t\t\t\t----------------------------------------"<<endl;
cout<<"\t\t\t\t\tpress 1 for Bus Reservation"<<endl;
cout<<"\t\t\t\t\tpress 2 for Adding Station"<<endl;
cout<<"\t\t\t\t\tpress 3 for Adding  Bus Route"<<endl;
cout<<"\t\t\t\t\tpress 4 for price changing"<<endl;
cout<<"\t\t\t\t\tpress 5 for display station"<<endl;
cout<<"\t\t\t\t\tpress 6 for display routes"<<endl;
cout<<"\t\t\t\t\tpress 'q' for exit"<<endl;
cin>>c;
switch(c)
{
	case '1':
	bs.reservebus();
		break;
		case '2':
			bs.savestation();
			break;
			case '3':
				bs.saveroute();
				break;
					case '4':
						bs.changeprice();
		break;
		case '5':
			bs.displaystation();
			break;
			case '6':
				bs.displayroute();
				break;
				case 'q':
				break;
				default:
					cout<<"please enter valid choice"<<endl;
					break;
}
}while(c!='q');

}
