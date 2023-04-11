import java.util.List;
import java.util.ArrayList;
import java.util.Iterator;

public class RVInventory {
    public List<RV> rvs;

    public RVInventory() {
       this.rvs = new ArrayList<RV>();
    }

    public void addRV(RV rv) {
        rvs.add(rv);
    }

    public List<RV> search(
        
        boolean manufacturer_specified,
        RVmanufacturerAssociation manufacturer) {

        List<RV> matchingRVs = new ArrayList<RV>();

        for (Iterator<RV> i = rvs.iterator(); i.hasNext();) {
            RV rv = i.next();

            /*if (stockNumber_specified) {
                if (stockNumber.equals(">")) {
                    if (!(rv.stockNumberValue() > fiftyPercentStartTimeCriterion_Value)) continue;
                } else { // comparison string is "<"
                    if (!(rv.stockNumberValue() < fiftyPercentStartTimeCriterion_Value)) continue;   
                }
            } */




            if (manufacturer_specified) {
                if (!(rv.getManufacturer() == manufacturer));
            }
            matchingRVs.add(rv);
        }

        // if we get here, then we've checked all the RVs in our inventory and haven't
        // found a match. Return null to indicate nothing found.
        return matchingRVs;
    }

    public void addRV( String rVString, String string2, String string3, int i, String string4, int j, int k) {
    }
}
