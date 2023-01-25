import java.util.Scanner;
public class stuff {
    public static void main(String[] args)
    
{for (int i = 0; i < 10; i++)
for (int j = 0; j < i; j++)
System.out.println(i * j);
}
/*{
    int amount, originalAmount, quarters, dimes, nickels, pennies;
    System.out.println ("Enter a whole number from 1 to 99.");
    System.out.println("i will find a combination of coins");
    System.out.println("that equals the amount of change.");

    Scanner keyboard = new Scanner(System.in);
    amount = keyboard.nextInt();
    originalAmount = amount;
    quarters = amount/25;
    amount = amount % 25;
    dimes = amount /10;
    amount = amount %10;
    nickels = amount /5;
    amount = amount %5; 
    pennies = amount;

    System.out.println(originalAmount + " cents in coins can be give as :");
    System.out.println( quarters + " quarters");
    System.out.println( dimes + " dimes");
    System.out.println(nickels + " nickels and");
    System.out.println(pennies + "pennies");
    System.out.println("Boom, there you go.");
}
{
    Scanner in = new Scanner(System.in);
    String string1 = in.nextLine();
    System.out.println("Enter the first string :" + string1);
    String string2 = in.nextLine();
        System.out.println("Enter the second string :"
                           + string2);
    System.out.println("\nAre both string same: ");
    if (string1.equals(string2) == true) {
        System.out.println("Yes");
    }
    else {
        System.out.println("No");
    }
    in.close();

{
    Scanner input = new Scanner(System.in);

    // Prompt the user to enter a letter grade A, B, C, D or F
    System.out.print("Enter a letter grade: ");
    String s = input.nextLine();
    char ch = s.charAt(0);
    ch = Character.toUpperCase(ch);
    
    if (ch >= 'A' && ch <= 'F' && ch != 'E')
    {
      System.out.print("The numeric value for grade " + ch + " is ");
      switch(ch)
      {
        case 'A': System.out.println(4); break;
        case 'B': System.out.println(3); break;
        case 'C': System.out.println(2); break;
        case 'D': System.out.println(1); break;
        case 'F': System.out.println(0); 
      }
    }
    else
      System.out.println(ch + " is an invalid grade");
    input.close();
  }
}*/