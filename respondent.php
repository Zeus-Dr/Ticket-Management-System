<?php
require('config/config.php');
require('config/db.php');

include('inc/query1.php');
include('inc/query2.php');


//Close connection
mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>

<div id="tester">

</div>
<div id="tester1">

</div>

<div class="wrapped" id="wrapped">
    <section class="chat-area">
        <header>
            <button class="back-icon">&larr;</button>
            <img src="imq\the great gatsby.jpg" alt="" />
            <div class="details">
                <span>Zeus</span>
                <p>Active now</p>
            </div>
        </header>
        <div class="chat-box">
            <div class="chat outqoinq">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="chat incominq">
                <img src="imq\the great gatsby.jpg" alt="" />
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="chat outqoinq">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="chat incominq">
                <img src="imq\the great gatsby.jpg" alt="" />
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="chat outqoinq">
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="chat incominq">
                <img src="imq\the great gatsby.jpg" alt="" />
                <div class="details">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
        </div>
        <form action="#" class="typinq-area">
            <input type="text" placeholder="Type a messaqe here..." />
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>
<div class="wrapper" id="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <button class="back-icon" style="cursor: pointer;
    border: none;
    outline: none;
    background: none;
    color: black;
    margin-left: -1rem;
    margin-right: 2px;
    font-size: 30px;
    font-weight: bold;" onclick="logout()">&larr;</button>
                <img src="imq\the great gatsby.jpg" alt="" />
                <div class="details">
                    <span>Zeus</span>
                    <p>Active now</p>
                </div>
            </div>
            <button class="logout" id="logout" onclick="logout()">Logout</button>
        </header>
        <div class="search">
            <span class="text">Select a user to chat with</span>
            <input type="text" placeholder="Enter name to search..." />
            <button>
                <img src="imq\icons8_search.ico" alt="search_button" />
            </button>
        </div>
        <div class="users-list">
            <a href="#">
                <div class="content">
                    <img src="imq\the great gatsby.jpg" alt="" />
                    <div class="details">
                        <span>Zeus</span>
                        <p>This is test messaqe</p>
                    </div>
                </div>
                <div class="status-dot">
                    <i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="imq\the great gatsby.jpg" alt="" />
                    <div class="details">
                        <span>Zeus</span>
                        <p>This is test messaqe</p>
                    </div>
                </div>
                <div class="status-dot">
                    <i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="imq\the great gatsby.jpg" alt="" />
                    <div class="details">
                        <span>Zeus</span>
                        <p>This is test messaqe</p>
                    </div>
                </div>
                <div class="status-dot">
                    <i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="imq\the great gatsby.jpg" alt="" />
                    <div class="details">
                        <span>Zeus</span>
                        <p>This is test messaqe</p>
                    </div>
                </div>
                <div class="status-dot">
                    <i class="fas fa-circle"></i>
                </div>
            </a>
        </div>
    </section>
</div>
<div class="chat_icon" id="chat_icon" onclick="toqqleChat()">
    <img src="imq\icons8_whatsapp_3.ico" alt="chat_icon" />
</div>
<div>
    <div class="top">
        <div class="loqo">
            <img src="imq\the alcazar.jpg" alt="Loqo here" />
            <h6>Loqo</h6>
        </div>
        <div class="riqht">
            <div class="theme" id="theme">
                <span class="material-symbols-sharp active"> light_mode </span>
                <span class="material-symbols-sharp"> dark_mode </span>
            </div>
            <div class="profile">
                <div class="profile-photo">
                    <img src="imq\The Magic Stolen from him.jpg" alt="Photo here" />
                </div>
                <div class="info">
                    <p><small>Admin</small></p>
                </div>
            </div>
        </div>
        <!-- <div class="settinqs">
                <h3>Settinqs</h3>
            </div>
            <div>
                <img src="" alt="Notification avatar" />
                <h3>Name here</h3>
            </div> -->
        <div class="search">
            <p>
                <input type="text" placeholder="Type keyword to Search..." / id="search">
            </p>
        </div>
    </div>
    <div>
        <div class="titles">
            <div class="main-tasks">
                <button class="public" id="publics" onclick="publicClick()">
                    <h2>Public Tasks</h2>
                </button>
                <button class="my" id="mys" onclick="myClick()">
                    <h2>My Tasks</h2>
                </button>
            </div>
            <div class="mini-tasks" id="mini-tasks">
                <button class="complete" id="completes" onclick="completeClick()">
                    Complete
                </button>
                <button class="incomplete" id="incompletes" onclick="incompleteClick()">
                    Incomplete
                </button>
                <button class="pending" id="pendings" onclick="pendingClick()">
                    Pending
                </button>
            </div>
        </div>
        <div class="tasks" id="tasks">
            <table id="table1">
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Problem Category</th>
                        <th>Problem Description</th>
                        <th>Problem Status</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php foreach ($tickets as $ticket) : ?>

                        <tr id="<?php echo $ticket['ticket_id'] ?>" onclick="displayPopup(this.rowIndex)">
                            <td><?php echo $ticket['ticket_id'] ?></td>
                            <td><?php echo $ticket['problem_category'] ?></td>
                            <td><?php echo $ticket['problem_description'] ?></td>
                            <td class="<?php
                                        if (strtolower($ticket['problem_status']) == 'pending') {
                                            echo 'pending';
                                            # code...
                                        } else if (strtolower($ticket['problem_status']) == 'incomplete') {
                                            # code...
                                            echo 'incomplete';
                                        } else {
                                            # code...
                                            echo 'complete';
                                        }
                                        ?>"><?php echo $ticket['problem_status'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>
        <div class="mytasks" id="mytasks">
            <table id="table2">
                <thead>
                    <tr>
                        <th>myTicket ID</th>
                        <th>Problem Category</th>
                        <th>Problem Description</th>
                        <th>Problem Status</th>
                    </tr>
                </thead>
                <tbody id="tableBody2">
                    <?php foreach ($my_tasks2 as $my_task3) : ?>
                        <tr data-modal-target="#comment-box">
                            <td><?php echo $my_task3['ticket_id'] ?></td>
                            <td><?php echo $my_task3['problem_category'] ?></td>
                            <td><?php echo $my_task3['problem_description'] ?></td>
                            <td class="<?php
                                        if (strtolower($my_task3['problem_status']) == 'pending') {
                                            echo 'pending';
                                            # code...
                                        } else if (strtolower($my_task3['problem_status']) == 'incomplete') {
                                            # code...
                                            echo 'incomplete';
                                        } else {
                                            # code...
                                            echo 'complete';
                                        }
                                        ?>"><?php echo $my_task3['problem_status'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>
    </div>
</div>
<!-- this is the minor popup that comfirms the respondent either to take the task or to leave it -->
<div class="popup" id="popup">
    <div class="imag">
        <img src="./imq/task-completed.png" alt="">

    </div>

    <div class="leave">
        <button id="btn-leave-task" onclick="removePopup()">Leave Task</button>
    </div>
    <div class="take">
        <button id="btn-take-task" onclick="takeTask()">Take Task</button>
    </div>
</div>

<!-- This is for comment box -->
<div class="comment-box" id="comment-box">
    <div class="comment-header">
        <div class="wording">
            <p>CATEGORY: <span id="comment-category" style="color: white;"></span></p>
            <p style="font: bold;">DESCRIPTION</p>
            <p style="font-size: 15px; color: white;" id="comment-description"></p>
        </div>
        <button data-close-button class="close-button">&times;</button>
    </div>
    <div action="" class="comment-form">
        <textarea name="" id="text-area" cols="2" rows="10" placeholder="Write Your Reply"></textarea>
        <input type="submit" name="submit" onclick="submitter()" value="Submit" data-close-button>
    </div>
</div>
<div id="overlay"></div>

<div>
    <h3>Created By</h3>
    <a href="www.twitter.com">Kivumbi Alexander</a>
    <a href="Contact.html">Mwesiye Joseph</a>
</div>

<script src="javascript\respondent.js"></script>

<?php include('inc/footer.php'); ?>