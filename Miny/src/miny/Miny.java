package miny;

import java.util.Random;

/**
 *
 * @author dave8
 */
public class Miny {

    public static void main(String[] args) {
        int[][] poleMin = new int[10][10];
        Random rand = new Random();
        for (int i = 0; i < poleMin.length; i++) {
            for (int j = 0; j < poleMin[i].length; j++) {
                poleMin[i][j] = 0;
            }
        }
        int m = 10, i = 0, x,y;
        while (i != 5) {
            x = rand.nextInt(poleMin[i].length);
            y = rand.nextInt(poleMin.length);
                  poleMin[x][y] = 9;
            i++;
        }

        for ( i = 0; i < poleMin.length; i++) {
            for (int j = 0; j < poleMin[i].length; j++) {
                System.out.print(poleMin[i][j] + " ");
            }
            System.out.println();
        }
    }

}
