#include <iostream>
using namespace std;
int main()
{
    int n, i, j, k, m = 0;
    cout << "\n\n Print patern:\n";
    cout << " Input number or rows: ";
    cin >> n;
    for (i = 1; i <= n; i++) {
        if (i == 1) {
            for (j = 1; j <= i; j++) {
                cout << m << "  ";
            }
            for (k = 1; k <= n - i; k++) {
                cout << k << "  ";
            }
        }
        else {
            for (k = i - 1; k >= 1; k--) {
                cout << k << "  ";
            }
            cout << m << "  ";
            for (j = 1; j <= n - i; j++) {
                cout << j << "  ";
            }
        }
        cout << endl;
    }
    cout << endl;
}
int n, i, j, ctr, r;
    cout << " Input any number: ";
    cin >> n;
    for (i = 0; i < 10; i++) 
    {
        cout << "The frequency of " << i << " = ";
        ctr = 0;
        for (j = n; j > 0; j = j / 10) 
        {
            r = j % 10;
            if (r == i) 
            {
                ctr++;
            }
        }
        cout << ctr << endl;
    }

{
    int number, reminder, digitProduct;
	
	cout << "\nEnter the Number to find the Digits Product =  ";
	cin >> number;
	
	for (digitProduct = 1; number > 0; number = number / 10)
	{
    	reminder = number % 10;
    	digitProduct = digitProduct * reminder;
	}
	cout << "\nThe Product of all Digits in a given Number = " << digitProduct;
		
 	return 0;
}
{
    int n,second,last,sum;
    cout << "\n\n Find the sum of second and last digit of a number:\n";
    cout << " Input any number: ";
    cin >> n;
    second = n;
	last=n % 10;
	for(second=n;second>=10;second=second/10);
    cout<<" The second digit of "<<n<<" is: "<<second<<endl;
    cout<<" The last digit of "<<n<<" is: "<<last<<endl;
	cout<<" The sum of second and last digit of "<<n<<" is: "<<second+last<<endl;
}