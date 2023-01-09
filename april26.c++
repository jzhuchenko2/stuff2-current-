#include <iostream>
using namespace std;

/*class Joe {
    public:
    int myNum;
    string myString;
};
int main(){
    Joe myObj;

    myObj.myNum = 69;
    myObj.myString = "poopyface";

    cout << "myObj.myNum" << " " << myObj.myString;
//class=joe is MyClass
}*/
/*
int main(){
    int JOE[] = {1,2,3,4,5,6,7,8,9,10};
    int sum = 0;

    for(int n : JOE) {
        sum=sum + n;
    }

    cout << sum;
}*/
/*
int main(){
    cout << "input an integer for a: ";
    int a, b;
    cin >>a;
    b = 10;

    if(a==b) {
        cout << "a and b are equal";
    }
    else if (a>b) {
        cout << "input value is greater than 10";
    }
    else {
        cout << "input value is less than 10";
    }
}*/
/*
class A {
    private:
    int a;
    public: 
    A() { a = 0; }
    friend class B;
};
class B {
    private:
    int b;
    public: 
    void showA(A& x){
        cout << "A::a=" << x.a;
    }
};
int main(){
    A a;
    B b;
    b.showA(a);
    return 0;
}*/

void duplicate(int& a, int& b, int& c) {
    a *=2;
    b *=2;
    c *=2;
}
int main(){
    int x = 1, y = 2, z = 3;
    duplicate(x, y, z);
    cout << &x << " " << &y << " " << &z;
    return 0;
}







