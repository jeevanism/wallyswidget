function calculateWidgetPacks($widgets) {
    // Define the available pack sizes in descending order
    $packSizes = array(5000, 2000, 1000, 500, 250);
    
    // Initialize the variables
    $packCounts = array();
    $totalPacks = 0;
    
    // Loop through the pack sizes
    foreach ($packSizes as $packSize) {
        // Determine how many packs are needed for this pack size
        $packCount = floor($widgets / $packSize);
        $widgets -= $packCount * $packSize;
        
        // Save the pack count for this pack size
        $packCounts[$packSize] = $packCount;
        
        // Add the pack count to the total number of packs
        $totalPacks += $packCount;
    }
    
    // Format the output string
    $output = "";
    foreach ($packCounts as $packSize => $packCount) {
        if ($packCount > 0) {
            $output .= $packCount . " x " . $packSize . " pack(s), ";
        }
    }
    $output = rtrim($output, ", ");
    
    // Return the output
    return "Total packs: " . $totalPacks . "\n" . $output;
}
