<h3>List of songs (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Start Date</td>
                <td>End Date</td>
                <td>Destination</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bookings as $booking) { ?>
                <tr>
                    <td><?php if (isset($booking->id)) echo $booking->id; ?></td>
                    <td><?php if (isset($booking->startDate)) echo $booking->startDate; ?></td>
                    <td><?php if (isset($booking->endDate)) echo $booking->endDate; ?></td>
                    <td><?php if (isset($booking->destination)) echo $booking->destination; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>