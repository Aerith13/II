#include<iostream>
using namespace std;

int main()
{
    int i,y,n,x,sum=0;
    float a,b,c,d;

    cout<<"Enter subject: ";
    cin>>n;

    for(i=1;i<=n;++i)
    {
        cout<<"\n 1st year subject "<<i<<" : ";
        cin>>x;
        sum+=x;   
		a = sum / n;    
    }
    
    for(i=1;i<=n;++i)
    {	    
		cout<<"\n 2nd year subject "<<i<<" : ";
        cin>>x;
        sum = x * n;
		b = sum / n;       
    }
    
	for(i=1;i<=n;++i)
    {	    
		cout<<"\n 3rd year subject "<<i<<" : ";
        cin>>x;
        sum = x * n;
		c = sum / n;       
    }
    
	for(i=1;i<=n;++i)
    {	    
		cout<<"\n 4th year subject "<<i<<" : ";
        cin>>x;
        sum = x * n;
		d = sum / n;       
    }
        
    
	cout<<"\nAverage: \n";
    cout<<"1st year " << a;
    cout<<"\n2nd year " << b;
    cout<<"\n3rd year " << c;
    cout<<"\n4th year " << d;
    
    cout<<"\n";

    return 0;
}
