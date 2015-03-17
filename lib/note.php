<?php 
                    if ($res['note'] == 0){
                        echo '<i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>' ;
                    }

                    if ($res['note'] == 1){
                        echo '<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>' ;
                    }

                    if ($res['note'] == 2){
                        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>' ;
                    }

                    if ($res['note'] == 3){
                        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>' ;
                    }

                    if ($res['note'] == 4){
                        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>' ;
                    }

                    if ($res['note'] == 5){
                        echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>' ;
                    }

                    if (($res['note'] > 0) && ($res['note'] < 1)){
                        echo '<i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>' ;
                    }

                    if (($res['note'] > 1) && ($res['note'] < 2)){
                        echo '<i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>' ;
                    }

                    if (($res['note'] > 2) && ($res['note'] < 3)){
                        echo '<i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>' ;
                    }

                    if (($res['note'] > 3) && ($res['note'] < 4)){
                        echo '<i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>' ;
                    }

                     if (($res['note'] > 4) && ($res['note'] < 5)){
                        echo '<i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>';
                    }
                ?>