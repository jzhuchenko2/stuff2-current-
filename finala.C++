#include <iostream> 
using namespace std;   
  
int main() {     
   int weight {0};
   for (int count = 1; count <= 3; count++) {        
    cout << "Enter your weight please ";
    cin >> weight;     
         
      if (weight <= 225)          
      cout << "I can bench press you!" << endl;        
      else          
      cout << "Sorry, I cannot bench press you. Yet!"<< endl;               
   }       
  cout << "Bye.";    
}