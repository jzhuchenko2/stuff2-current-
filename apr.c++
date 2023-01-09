/*#include<iostream>
using namespace std;
int main()
{
    int x;
    cout << "Enter a number\n";
    cin >> x;
    cout << "Address is "<<&x<<"\n";
    return 0;
}*/
/*#include<iostream>
using namespace std;
int main()
{
    int x, *y;
    cout << "Enter a number\n";
    cin >> x;
    y = &x;
    cout << "Value of the address of pointer of "<< x << " is "<< &y<<"\n";
    return 0;
}*/
#include<iostream>
using namespace std;
void print(int *a)
{
    cout << *a << "\n";
}
int main()
{
    int x;
    cout << "Enter a number\n";
    cin >> x;
    print(&x);
    return 0;
}


