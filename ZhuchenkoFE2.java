import java.util.Arrays;
import java.util.Scanner;
public class ZhuchenkoFE2 {
    private static final int size_max = 100;
    public static void main(String[] args) {
        int[] arr = new int[size_max];


        for (int i = 0; i < 10; i++)
            arr[i] = i + 1;
        int choose = 0, size = 10;
        Scanner sc = new Scanner(System.in);
        while (choose != 3) {
            System.out.println("1) enter the number:  ");
            System.out.println("2) print the content of the array: ");
            System.out.println("3) exit: ");
            System.out.print("Enter your option:    ");
            choose = sc.nextInt();
            switch (choose) {
                case 1:
                    size = numberEntered(arr, size, sc);

                    
                    break;
                case 2:
                    printArray(arr);
                    break;
                case 3:
                    break;


                default:
                    System.out.println("Invalid choice. Try again");
            }
        }
        sc.close();
    }

    private static void printArray(int[] arr) {
        System.out.println("\nThe array:");
        System.out.println(Arrays.toString(arr));
        System.out.println();
    }

    private static int numberEntered(int[] arr, int size, Scanner sc) {
        System.out.print("\nEnter a number: ");
        int key = sc.nextInt();
        int low = 0, high = size - 1;
        while (low < high) {
            int mid = (low + high) / 2;
            if (key <= arr[mid])
                high = mid;
            else
                low = mid + 1;
        }
        if (arr[low] == key) {
            for (int i = low; i < size; i++)
                arr[i] = arr[i + 1];
            System.out.println("Deletion of number successful");
            size--;
        } else {
            if (low == size - 1)
                arr[size] = key;
            else if (low == 0) {
                for (int i = size; i > low; i--)
                    arr[i] = arr[i - 1];
                arr[low] = key;
            } else {
                for (int i = size; i >= low; i--)
                    arr[i] = arr[i - 1];
                arr[low] = key;
            }
            System.out.println("Insertion of number successful");
            size++;
        }
        return size;
    }
}
